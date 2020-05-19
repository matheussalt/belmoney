import './style.scss';
import animacoes from './js/animacoes';
import openMenu from './js/openMenu';
import togglePaises from './js/togglePaises';
import nomeTrigger from './js/nomeTrigger';
import carrossel from './js/carrossel';
import './js/initScrollAnimations';
import './js/modernizr';

openMenu('.menu-hamb', '.header-wrapper');
openMenu('.choose-language', null);

togglePaises('.continente-name', '.continente');
togglePaises('.termo-title', '.termo');

nomeTrigger();

animacoes();
