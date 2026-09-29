'use strict';
const preview = document.querySelector('.retro-dialog');
if (preview && typeof preview.showModal === 'function') {
  const media = preview.querySelector('.retro-media');
  let trigger;
  document.querySelectorAll('[data-lightbox], [data-video]').forEach(link => {
    link.addEventListener('click', event => {
      if (event.ctrlKey || event.metaKey || event.shiftKey || event.altKey) return;
      event.preventDefault();
      trigger = link;
      const title = link.textContent.trim() || link.querySelector('img')?.alt || 'Media preview';
      const element = document.createElement(link.hasAttribute('data-video') ? 'iframe' : 'img');
      if (element.tagName === 'IFRAME') {
        const id = new URL(link.href).searchParams.get('v');
        element.src = 'https://www.youtube-nocookie.com/embed/' + encodeURIComponent(id);
        element.title = title;
        element.allow = 'fullscreen; encrypted-media; picture-in-picture';
        element.allowFullscreen = true;
        element.referrerPolicy = 'strict-origin-when-cross-origin';
      } else {
        element.src = link.href;
        element.alt = title;
      }
      media.replaceChildren(element);
      preview.querySelector('.retro-fallback').href = link.href;
      preview.showModal();
    });
  });
  preview.addEventListener('close', () => {
    media.replaceChildren();
    trigger?.focus();
  });
  preview.addEventListener('click', event => {
    const box = preview.getBoundingClientRect();
    if (event.target === preview && (event.clientX < box.left || event.clientX > box.right || event.clientY < box.top || event.clientY > box.bottom)) preview.close();
  });
}
