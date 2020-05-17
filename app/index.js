import './style.scss';
import animacoes from './js/animacoes';
import openMenu from './js/openMenu';
import togglePaises from './js/togglePaises';
import scrollAnimation from './js/scrollAnimation';
import carrossel from './js/carrossel';
import './js/modernizr';

openMenu('.menu-hamb', '.header-wrapper');
openMenu('.choose-language', null);
// scrollAnimation();

togglePaises('.continente-name', '.continente');
