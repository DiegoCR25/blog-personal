// Filtros accesibles para la página de música y proyectos.
document.querySelectorAll('[data-filter-controls]').forEach((bar) => {
  const group = bar.dataset.filterControls;
  const list = document.querySelector(`[data-filter-items="${group}"]`);
  if (!list) return;
  const buttons = [...bar.querySelectorAll('[data-category]')];
  const items = [...list.querySelectorAll('[data-category]')];
  buttons.forEach((button) => {
    button.addEventListener('click', () => {
      const selected = button.dataset.category;
      buttons.forEach((b) => {
        const active = b === button;
        b.classList.toggle('is-active', active);
        b.setAttribute('aria-pressed', String(active));
      });
      items.forEach((item) => {
        item.hidden = selected !== 'todos' && item.dataset.category !== selected;
      });
    });
  });
});
