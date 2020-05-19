import { scrollEnter } from './scrollAnimation';

// animações home

scrollEnter(
  '.como-img svg',
  {
    triggerElement: '.como-img',
    duration: 200,
    offset: -200,
  },
  {
    transform: `translate3d(-10%, 0, 0)`,
    opacity: 0,
  },
  {
    transform: `translate3d(0, 0, 0)`,
    opacity: 1,
    ease: 'power1.easeInOut',
  }
);

scrollEnter(
  '.necessidade-item',
  {
    triggerElement: '.necessidade-item',
    duration: 200,
    offset: -200,
  },
  {
    transform: `translate3d(0, 20%, 0)`,
    opacity: 0,
  },
  {
    transform: `translate3d(0, 0, 0)`,
    opacity: 1,
    ease: 'power1.easeInOut',
  }
);

const compromissosTxt = document.querySelectorAll('.compromisso-txt');
const compromissosImg = document.querySelectorAll('.compromisso-img');
const compromissos = [...compromissosImg, ...compromissosTxt];

compromissos.forEach((comrpomisso, index) => {
  scrollEnter(
    comrpomisso,
    {
      triggerElement: comrpomisso,
      duration: 200,
      offset: -200,
    },
    {
      transform:
        index % 2 === 0 ? `translate3d(10%, 0, 0)` : `translate3d(-10%, 0, 0)`,
      opacity: 0,
    },
    {
      transform: `translate3d(0, 0, 0)`,
      opacity: 1,
      ease: 'power1.easeInOut',
    }
  );
});

// animação de textos em geral

const textArray = [
  {
    target: '.como-txt h2',
    trigger: '.como-txt h2',
  },
  {
    target: '.como-txt p',
    trigger: '.como-txt p',
  },
  {
    target: '.necessidade h2',
    trigger: '.necessidade h2',
    direction: true,
  },
  {
    target: '.necessidade p',
    trigger: '.necessidade p',
    direction: true,
  },
  {
    target: '.necessidade .btn-cta',
    trigger: '.necessidade .btn-cta',
  },
  {
    target: '.economia-txt',
    trigger: '.economia-txt',
  },
];

textArray.forEach((txt) => {
  scrollEnter(
    txt.target,
    {
      triggerElement: txt.trigger,
      duration: 200,
      offset: -200,
    },
    {
      transform: txt.direction
        ? `translate3d(-10%, 0, 0)`
        : `translate3d(10%, 0, 0)`,
      opacity: 0,
    },
    {
      transform: `translate3d(0, 0, 0)`,
      opacity: 1,
      ease: 'power1.easeInOut',
    }
  );
});
