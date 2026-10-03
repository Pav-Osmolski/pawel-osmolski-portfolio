'use strict';
document.querySelectorAll('[data-embed]').forEach((button) => {
  button.hidden = false;
  button.addEventListener('click', () => {
    const frame = document.createElement('iframe');
    frame.src = button.dataset.embed;
    frame.title = button.dataset.title;
    frame.allow = 'fullscreen; encrypted-media; picture-in-picture';
    frame.allowFullscreen = true;
    frame.referrerPolicy = 'strict-origin-when-cross-origin';
    const player = button.closest('[data-player]');
    const fallback = player.querySelector('a').cloneNode(true);
    const wrapper = document.createElement('div');
    wrapper.className = 'player-fallback';
    wrapper.append(fallback);
    player.replaceChildren(frame, wrapper);
    frame.focus();
  }, { once: true });
});
const dialog = document.querySelector('.lightbox');
if (dialog && typeof dialog.showModal === 'function') {
  let trigger;
  document.querySelectorAll('[data-lightbox]').forEach((link) => {
    link.addEventListener('click', (event) => {
      if (event.ctrlKey || event.metaKey || event.shiftKey || event.altKey) return;
      event.preventDefault();
      trigger = link;
      const image = dialog.querySelector('img');
      const caption = link.querySelector('img')?.alt || link.textContent.trim();
      image.src = link.href;
      image.alt = caption;
      const captionElement = dialog.querySelector('p');
      const projectLink = link.closest('.project')?.querySelector('.project__caption h3 a');
      captionElement.replaceChildren();
      if (projectLink) {
        const captionLink = projectLink.cloneNode(true);
        captionLink.textContent = caption;
        captionElement.append(captionLink);
      } else {
        captionElement.textContent = caption;
      }
      dialog.showModal();
    });
  });
  dialog.addEventListener('close', () => trigger?.focus());
  dialog.addEventListener('click', (event) => {
    const b = dialog.getBoundingClientRect();
    if (event.target === dialog && (event.clientX < b.left || event.clientX > b.right || event.clientY < b.top || event.clientY > b.bottom)) dialog.close();
  });
}


document.querySelectorAll('[data-slide-details]').forEach((details) => {
  const summary = details.querySelector('summary');
  const content = details.querySelector('.details-content');
  const motion = matchMedia('(prefers-reduced-motion: reduce)');
  if (!summary || !content || typeof content.animate !== 'function') return;
  let animation;
  let expanded = details.open;
  const finish = () => {
    details.open = expanded;
    animation?.cancel();
    animation = null;
    content.style.height = '';
    content.style.overflow = '';
  };
  summary.addEventListener('click', (event) => {
    if (motion.matches) return;
    event.preventDefault();
    const height = details.open ? content.getBoundingClientRect().height : 0;
    expanded = animation ? !expanded : !details.open;
    animation?.cancel();
    details.open = true;
    content.style.height = '';
    const fullHeight = content.getBoundingClientRect().height;
    content.style.overflow = 'hidden';
    animation = content.animate(
      [{ height: height + 'px' }, { height: (expanded ? fullHeight : 0) + 'px' }],
      { duration: 200, easing: 'ease', fill: 'both' }
    );
    animation.onfinish = finish;
  });
  motion.addEventListener('change', () => { if (animation) finish(); });
});
