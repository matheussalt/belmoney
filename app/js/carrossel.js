export default function carrossel(carrosselSelector, carrosselWrapperSelector) {
  const carrossel = document.querySelector(carrosselSelector);
  const carrosselWrapper = document.querySelector(carrosselWrapperSelector);
  const carrosselItems = Array.from(carrosselWrapper.children);
  let screenItem;

  function verifyScreenSize() {
    if (window.innerWidth < 768) {
      screenItem = 1;
    } else if (window.innerWidth < 1050) {
      screenItem = 3;
    } else {
      screenItem = 5;
    }
  }

  verifyScreenSize();

  carrosselItems.forEach((item, index) => {
    item.style.setProperty(
      'width',
      `${carrossel.getBoundingClientRect().width / screenItem}px`
    );

    if (index === 0) item.classList.add('active');
  });

  carrossel.addEventListener('mousedown', {});
}
