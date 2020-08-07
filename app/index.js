import './style.scss';
import animacoes from './js/animacoes';
import openMenu from './js/openMenu';
import togglePaises from './js/togglePaises';
import toggleLanguage from './js/toggleLanguage';
import nomeTrigger from './js/nomeTrigger';
import carrossel from './js/carrossel';
import './js/scrollAnimation';
import './js/modernizr';

openMenu('.menu-hamb', '.header-wrapper');

toggleLanguage('.choose-language', '.choose-language .current span');

togglePaises('.continente-name', '.continente');
togglePaises('.termo-title', '.termo');

nomeTrigger();

animacoes();

carrossel();

// if (`${baseURL}/` === window.location.href) {
//   animationHome();
// }
