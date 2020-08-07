export default function toggleLanguage(menuLanguageSelector, current) {
  const menuHamb = document.querySelector(menuLanguageSelector);
  const currentLanguage = document.querySelector(current);

  if (!menuHamb) return null;

  const sitePrefix = baseURL.split('/');

  if (sitePrefix[sitePrefix.length - 1] === 'fr') {
    currentLanguage.innerText = 'FR';
  } else if (sitePrefix[sitePrefix.length - 1] === 'pt') {
    currentLanguage.innerText = 'PT';
  } else if (sitePrefix[sitePrefix.length - 1] === 'es') {
    currentLanguage.innerText = 'ES';
  } else {
    currentLanguage.innerText = 'EN';
  }

  menuHamb.addEventListener('click', (e) => {
    menuHamb && menuHamb.classList.toggle('active');
  });
}
