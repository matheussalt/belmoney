export default function openMenu(menuHambSelector, menuSelector) {
  const menuHamb = document.querySelector(menuHambSelector);
  const menu = document.querySelector(menuSelector);

  if (!menuHamb && !menu) return null;

  menuHamb.addEventListener('click', (e) => {
    e.preventDefault();

    menu && menu.classList.toggle('active');
    menuHamb && menuHamb.classList.toggle('active');
  });
}
