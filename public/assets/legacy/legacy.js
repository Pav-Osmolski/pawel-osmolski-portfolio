'use strict';
const motion = matchMedia('(prefers-reduced-motion: reduce)');
document.querySelectorAll('.rslides').forEach((gallery, number) => {
  const slides = [...gallery.children];
  let current = 0;
  let paused = motion.matches;
  let timer;
  gallery.setAttribute('aria-label', number === 0 ? 'Photography gallery' : 'Web project gallery');
  const controls = document.createElement('div');
  controls.className = 'gallery-controls';
  const makeButton = (label, text, action) => {
    const button = document.createElement('button');
    button.type = 'button';
    button.textContent = text;
    button.setAttribute('aria-label', label);
    button.addEventListener('click', action);
    controls.append(button);
    return button;
  };
  const show = index => {
    current = (index + slides.length) % slides.length;
    slides.forEach((slide, i) => { slide.hidden = i !== current; });
  };
  const restart = () => {
    clearInterval(timer);
    if (!paused && !document.hidden && !gallery.matches(':hover, :focus-within') && !document.querySelector('dialog[open]')) {
      timer = setInterval(() => show(current + 1), 5000);
    }
  };
  const move = step => { show(current + step); restart(); };
  makeButton('Previous image', '‹', () => move(-1));
  const pause = makeButton('Pause slideshow', 'Pause', () => {
    paused = !paused;
    sync();
  });
  makeButton('Next image', '›', () => move(1));
  const sync = () => {
    pause.textContent = paused ? 'Play' : 'Pause';
    pause.setAttribute('aria-label', paused ? 'Play slideshow' : 'Pause slideshow');
    restart();
  };
  gallery.after(controls);
  gallery.addEventListener('mouseenter', () => clearInterval(timer));
  gallery.addEventListener('mouseleave', restart);
  gallery.addEventListener('focusin', () => clearInterval(timer));
  gallery.addEventListener('focusout', () => setTimeout(restart, 0));
  document.addEventListener('visibilitychange', restart);
  document.addEventListener('previewchange', restart);
  motion.addEventListener('change', () => { paused = motion.matches; sync(); });
  show(0);
  sync();
});
const header = document.querySelector('#header_container');
const footer = document.querySelector('#footer');
const updateBars = () => {
  header.classList.toggle('is-visible', scrollY >= 204);
  footer.classList.toggle('is-visible', scrollY + innerHeight + 300 >= document.documentElement.scrollHeight);
};
addEventListener('scroll', updateBars, {passive: true});
addEventListener('resize', updateBars);
addEventListener('load', updateBars);
updateBars();
const dialog = document.querySelector('.legacy-dialog');
if (typeof dialog.showModal === 'function') {
  let trigger;
  document.querySelectorAll('[data-lightbox]').forEach(link => {
    link.addEventListener('click', event => {
      if (event.ctrlKey || event.metaKey || event.shiftKey || event.altKey) return;
      event.preventDefault();
      trigger = link;
      const image = dialog.querySelector('img');
      image.src = link.href;
      image.alt = link.querySelector('img')?.alt || link.textContent.trim();
      const caption = link.parentElement.querySelector('.highslide-caption');
      const target = dialog.querySelector('.legacy-caption');
      target.replaceChildren();
      if (caption) target.append(...[...caption.childNodes].map(node => node.cloneNode(true)));
      else target.textContent = image.alt;
      dialog.showModal();
      document.dispatchEvent(new Event('previewchange'));
    });
  });
  dialog.addEventListener('close', () => {
    trigger?.focus();
    document.dispatchEvent(new Event('previewchange'));
  });
  dialog.addEventListener('click', event => {
    const box = dialog.getBoundingClientRect();
    if (event.target === dialog && (event.clientX < box.left || event.clientX > box.right || event.clientY < box.top || event.clientY > box.bottom)) dialog.close();
  });
}
