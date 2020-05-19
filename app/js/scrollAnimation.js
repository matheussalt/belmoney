import ScrollMagic from 'ScrollMagic'; // Or use scrollmagic-with-ssr to avoid server rendering problems
import 'scrollmagic/scrollmagic/uncompressed/plugins/debug.addIndicators';
import gsap, { TweenMax, TimelineMax, TimelineLite, TweenLite } from 'gsap'; // Also works with TweenLite and TimelineLite
import { ScrollMagicPluginGsap } from 'scrollmagic-plugin-gsap';

ScrollMagicPluginGsap(ScrollMagic, TweenMax, TimelineMax);

TweenLite.defaultOverwrite = false;

export function scrollEnter(target, targetTrigger, valuesFrom, valuesTo) {
  const tween = new TimelineLite();

  tween.add(gsap.fromTo(target, 1, valuesFrom, valuesTo));

  const controller = new ScrollMagic.Controller();

  const scene = new ScrollMagic.Scene(targetTrigger)
    .setTween(tween)
    .addTo(controller);
}
