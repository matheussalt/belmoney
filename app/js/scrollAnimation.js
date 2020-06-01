import ScrollMagic from 'ScrollMagic'; // Or use scrollmagic-with-ssr to avoid server rendering problems
import 'scrollmagic/scrollmagic/uncompressed/plugins/debug.addIndicators';
import gsap, { TweenMax, TimelineMax, TimelineLite, TweenLite } from 'gsap'; // Also works with TweenLite and TimelineLite
import { ScrollMagicPluginGsap } from 'scrollmagic-plugin-gsap';

ScrollMagicPluginGsap(ScrollMagic, TweenMax, TimelineMax);

const controller = new ScrollMagic.Controller();

// Compromisso home
const compromissoItens = document.querySelectorAll(
  '.compromisso .container > div'
);
compromissoItens.forEach((item) => {
  if (!item) return null;

  const tween = TweenMax.from(item, 1, {
    transform: 'translate3d(0, 30px, 0)',
    opacity: 0,
  });

  const compromissoScene = new ScrollMagic.Scene({
    triggerElement: item,
    triggerHook: 1,
    duration: '100%',
  })
    .setTween(tween)
    .addTo(controller);
});

function setScrollAnimation(targets = [], sceneObject, pin) {
  let naoExiste = false;
  const newTimeline = new TimelineMax();

  targets.forEach((target) => {
    const objects = document.querySelectorAll(target.target);

    if (!objects[0]) naoExiste = true;

    newTimeline.from(
      objects,
      target.duration,
      target.animation,
      target.delay && target.delay
    );
  });

  if (!naoExiste) {
    const newScene = new ScrollMagic.Scene(sceneObject)
      .setTween(newTimeline)
      .addTo(controller);

    if (pin) {
      newScene.setPin(pin);
    }
  }
}

setScrollAnimation(
  [
    {
      target: '.como-txt',
      duration: 1,
      animation: {
        transform: 'translate3d(60px, 0, 0)',
        opacity: 0,
      },
    },
    {
      target: '.como-img',
      duration: 1,
      animation: {
        transform: 'translate3d(-60px, 0, 0)',
        opacity: 0,
      },
    },
  ],
  {
    triggerElement: '.como',
    triggerHook: 'onLeave',
    duration: '100%',
  },
  '.como'
);

setScrollAnimation(
  [
    {
      target: '.necessidade .box-animation',
      duration: 0.5,
      animation: {
        width: '100%',
      },
    },
    {
      target: '.necessidade h2',
      duration: 0.5,
      animation: {
        transform: 'translate3d(-60px, 0, 0)',
        opacity: 0,
      },
    },
    {
      target: '.necessidade-txt p',
      duration: 0.5,
      animation: {
        transform: 'translate3d(-60px, 0, 0)',
        opacity: 0,
      },
    },
    {
      target: '.necessidade-wrapper .btn-cta',
      duration: 0.5,
      animation: {
        transform: 'translate3d(60px, 0, 0)',
        opacity: 0,
      },
    },
    {
      target: '.necessidade-item',
      duration: 0.5,
      animation: {
        transform: 'translate3d(0, 30px, 0)',
        opacity: 0,
      },
    },
  ],
  {
    triggerElement: '.necessidade',
    triggerHook: 'onLeave',
    duration: '200%',
  },
  '.necessidade'
);

setScrollAnimation(
  [
    {
      target: '.economia .box-animation',
      duration: 0.3,
      animation: {
        width: '100%',
      },
    },
    {
      target: '.economia-txt',
      duration: 0.5,
      animation: {
        transform: 'translate3d(60px, 0, 0)',
        opacity: 0,
      },
    },
    {
      target: '.economia-img',
      duration: 0.5,
      animation: {
        transform: 'translate3d(60px, 0, 0)',
        opacity: 0,
      },
    },
  ],
  {
    triggerElement: '.economia',
    triggerHook: 0.1,
    duration: '200%',
  },
  '.economia'
);

setScrollAnimation(
  [
    {
      target: '.sobre-demais .circle1',
      duration: 0.3,
      animation: {
        transform: 'translate3d(60px, 0, 0)',
        opacity: 0,
      },
    },
    {
      target: '.sobre-demais .circle2',
      duration: 0.5,
      animation: {
        transform: 'translate3d(60px, 0, 0)',
        opacity: 0,
      },
    },
    {
      target: '.sobre-demais .circle3',
      duration: 0.5,
      animation: {
        transform: 'translate3d(60px, 0, 0)',
        opacity: 0,
      },
    },
  ],
  {
    triggerElement: '.sobre-demais',
    triggerHook: 0.6,
    duration: '100%',
  },
  null
);

setScrollAnimation(
  [
    {
      target: '.fazer-pagamentos .box-animation',
      duration: 0.3,
      animation: {
        width: '100%',
      },
    },
    {
      target: '.fazer-pagamentos h2',
      duration: 0.3,
      animation: {
        transform: 'translate3d(30px, 0, 0)',
        opacity: 0,
      },
    },
    {
      target: '.fazer-pagamentos .item-with-svg svg',
      duration: 0.3,
      animation: {
        transform: 'translate3d(0, 30px, 0)',
        opacity: 0,
      },
    },
    {
      target: '.fazer-pagamentos .item-with-svg p',
      duration: 0.3,
      animation: {
        transform: 'translate3d(-30px, 0, 0)',
        opacity: 0,
      },
    },
  ],
  {
    triggerElement: '.fazer-pagamentos',
    triggerHook: 0.1,
    duration: '200%',
  },
  '.fazer-pagamentos'
);

setScrollAnimation(
  [
    {
      target: '.como-funcionam .box-animation',
      duration: 0.3,
      animation: {
        height: '100vh',
      },
    },
    {
      target: '.como-funcionam h2',
      duration: 0.3,
      animation: {
        transform: 'translate3d(30px, 0, 0)',
        opacity: 0,
      },
    },
    {
      target: '.como-funcionam .container > p',
      duration: 0.3,
      animation: {
        transform: 'translate3d(0, 30px, 0)',
        opacity: 0,
      },
    },
    {
      target: '.como-funcionam .item-with-svg svg',
      duration: 0.3,
      animation: {
        transform: 'translate3d(0, 30px, 0)',
        opacity: 0,
      },
    },
    {
      target: '.como-funcionam .item-with-svg p',
      duration: 0.3,
      animation: {
        transform: 'translate3d(-30px, 0, 0)',
        opacity: 0,
      },
    },
  ],
  {
    triggerElement: '.como-funcionam',
    triggerHook: 0.1,
    duration: '200%',
  },
  '.como-funcionam'
);

setScrollAnimation(
  [
    {
      target: '.padroes-monitoramento .box-animation',
      duration: 0.3,
      animation: {
        width: '100%',
      },
    },
    {
      target: '.padroes-monitoramento h2',
      duration: 0.3,
      animation: {
        transform: 'translate3d(30px, 0, 0)',
        opacity: 0,
      },
    },
    {
      target: '.padroes-monitoramento .item-with-svg svg',
      duration: 0.3,
      animation: {
        transform: 'translate3d(0, 30px, 0)',
        opacity: 0,
      },
    },
    {
      target: '.padroes-monitoramento .item-with-svg p',
      duration: 0.3,
      animation: {
        transform: 'translate3d(-30px, 0, 0)',
        opacity: 0,
      },
    },
  ],
  {
    triggerElement: '.padroes-monitoramento',
    triggerHook: 0.1,
    duration: '200%',
  },
  '.padroes-monitoramento'
);

if (window.innerWidth > 768) {
  setScrollAnimation(
    [
      {
        target: '.phone-back',
        duration: 0.3,
        animation: {
          transform: 'translate3d(-50%, 60px, 0)',
          opacity: 0,
        },
      },
      {
        target: '.phone-front',
        duration: 0.3,
        animation: {
          transform: 'translate3d(-50%, -30px, 0)',
          opacity: 0,
        },
        delay: '-=.3',
      },
    ],
    {
      triggerElement: '.happ',
      triggerHook: 0.7,
      duration: '100%',
    },
    null
  );

  setScrollAnimation(
    [
      {
        target: '.como-receber .box-animation',
        duration: 0.3,
        animation: {
          height: '100vw',
        },
      },
      {
        target: '.como-receber h2',
        duration: 0.3,
        animation: {
          transform: 'translate3d(30px, 0, 0)',
          opacity: 0,
        },
      },
      {
        target: '.como-receber .item-with-svg h4',
        duration: 0.3,
        animation: {
          transform: 'translate3d(0, 30px, 0)',
          opacity: 0,
        },
      },
      {
        target: '.como-receber .item-with-svg p',
        duration: 0.3,
        animation: {
          transform: 'translate3d(-30px, 0, 0)',
          opacity: 0,
        },
      },
      {
        target: '.como-receber .item-with-svg a',
        duration: 0.3,
        animation: {
          transform: 'translate3d(-30px, 0, 0)',
          opacity: 0,
        },
      },
    ],
    {
      triggerElement: '.como-receber',
      triggerHook: 0.1,
      duration: '200%',
    },
    '.como-receber'
  );

  setScrollAnimation(
    [
      {
        target: '.para-provedores .box-animation',
        duration: 0.3,
        animation: {
          width: '100%',
        },
      },
      {
        target: '.para-provedores h2',
        duration: 0.3,
        animation: {
          transform: 'translate3d(30px, 0, 0)',
          opacity: 0,
        },
      },
      {
        target: '.para-provedores .container > p',
        duration: 0.3,
        animation: {
          transform: 'translate3d(30px, 0, 0)',
          opacity: 0,
        },
      },
      {
        target: '.para-provedores .item-with-svg img',
        duration: 0.3,
        animation: {
          transform: 'translate3d(0, 30px, 0)',
          opacity: 0,
        },
      },
      {
        target: '.para-provedores .item-with-svg p',
        duration: 0.3,
        animation: {
          transform: 'translate3d(-30px, 0, 0)',
          opacity: 0,
        },
      },
    ],
    {
      triggerElement: '.para-provedores',
      triggerHook: 0.1,
      duration: '200%',
    },
    '.para-provedores'
  );
} else {
  setScrollAnimation(
    [
      {
        target: '.phone-back',
        duration: 0.3,
        animation: {
          transform: 'translate3d(-50%, 60px, 0)',
          opacity: 0,
        },
      },
      {
        target: '.phone-front',
        duration: 0.3,
        animation: {
          transform: 'translate3d(-50%, -30px, 0)',
          opacity: 0,
        },
        delay: '-=.3',
      },
    ],
    {
      triggerElement: '.happ',
      triggerHook: 0.1,
      duration: '100%',
    },
    null
  );
}

setScrollAnimation(
  [
    {
      target: '.para-comerciantes h2',
      duration: 0.3,
      animation: {
        transform: 'translate3d(30px, 0, 0)',
        opacity: 0,
      },
    },
    {
      target: '.para-comerciantes p',
      duration: 0.3,
      animation: {
        transform: 'translate3d(0, 30px, 0)',
        opacity: 0,
      },
    },
    {
      target: '.para-comerciantes svg',
      duration: 0.3,
      animation: {
        transform: 'translate3d(-30px, 0, 0)',
        opacity: 0,
      },
    },
  ],
  {
    triggerElement: '.para-comerciantes',
    triggerHook: 0.1,
    duration: '200%',
  },
  '.para-comerciantes'
);

setScrollAnimation(
  [
    {
      target: '.seguranca-tecnologias .box-animation',
      duration: 0.3,
      animation: {
        width: '100%',
      },
    },
    {
      target: '.seguranca-tecnologias h2',
      duration: 0.3,
      animation: {
        transform: 'translate3d(30px, 0, 0)',
        opacity: 0,
      },
    },
    {
      target: '.seguranca-tecnologia-item img',
      duration: 0.3,
      animation: {
        transform: 'translate3d(0, 30px, 0)',
        opacity: 0,
      },
    },
    {
      target: '.seguranca-tecnologia-item h4',
      duration: 0.3,
      animation: {
        transform: 'translate3d(-30px, 0, 0)',
        opacity: 0,
      },
    },
    {
      target: '.seguranca-tecnologia-item p',
      duration: 0.3,
      animation: {
        transform: 'translate3d(-30px, 0, 0)',
        opacity: 0,
      },
    },
  ],
  {
    triggerElement: '.seguranca-tecnologias',
    triggerHook: 0.1,
    duration: '200%',
  },
  '.seguranca-tecnologias'
);
