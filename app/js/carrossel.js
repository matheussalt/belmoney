export default function carrossel(carrosselSelector, carrosselWrapperSelector) {
  const carrosselEquipe = document.querySelectorAll(
    '.carrossel-equipe .funcionario'
  );
  const carrosselWrapper = document.querySelector('.carrossel-wrapper');
  let carrosselPosition = 0;
  let carrosselMovement = 312;
  let funcionarioAtivo = 0;
  let cliqueInicial;
  let cliqueFinal;

  if (!carrosselEquipe || !carrosselWrapper) return null;

  const downEvents = ['mousedown', 'touchstart'];
  const moveEvents = ['mousemove', 'touchmove'];
  const upEvents = ['mouseup', 'touchend'];

  downEvents.forEach((event) => {
    carrosselWrapper.addEventListener(event, (e) => {
      if (e.type === 'touchstart') {
        cliqueInicial = e.touches[0].clientX;
      } else {
        cliqueInicial = e.clientX;
      }

      moveEvents.forEach((moveevent) => {
        carrosselWrapper.addEventListener(moveevent, moverCarrossel);
      });
    });
  });

  upEvents.forEach((event) => {
    carrosselWrapper.addEventListener(event, (e) => {
      console.log(e);
      if (e.type === 'touchend') {
        cliqueFinal = e.changedTouches[0].clientX;
      } else {
        cliqueFinal = e.clientX;
      }

      console.log(cliqueFinal);

      if (
        funcionarioAtivo < carrosselEquipe.length - 1 &&
        cliqueInicial > cliqueFinal
      ) {
        funcionarioAtivo++;

        carrosselEquipe.forEach((funcionario, index) => {
          funcionario.classList.remove('active');

          if (index === funcionarioAtivo) funcionario.classList.add('active');
        });

        carrosselPosition -= carrosselMovement;

        carrosselWrapper.style.setProperty('left', `${carrosselPosition}px`);
        carrosselWrapper.style.setProperty('transform', 'translate3d(0, 0, 0)');
      } else if (funcionarioAtivo !== 0) {
        funcionarioAtivo--;

        carrosselEquipe.forEach((funcionario, index) => {
          funcionario.classList.remove('active');

          if (index === funcionarioAtivo) funcionario.classList.add('active');
        });

        carrosselPosition += carrosselMovement;

        carrosselWrapper.style.setProperty('left', `${carrosselPosition}px`);
        carrosselWrapper.style.setProperty('transform', 'translate3d(0, 0, 0)');
      } else {
        carrosselPosition = 0;

        carrosselWrapper.style.setProperty('left', `${carrosselPosition}px`);
        carrosselWrapper.style.setProperty('transform', 'translate3d(0, 0, 0)');
      }

      moveEvents.forEach((moveevent) => {
        carrosselWrapper.removeEventListener(moveevent, moverCarrossel);
      });
    });
  });

  function moverCarrossel(e) {
    const move = e.type === 'touchmove' ? e.touches[0].clientX : e.clientX;

    carrosselWrapper.style.setProperty(
      'transform',
      `translate3d(${-(cliqueInicial - move)}px, 0, 0)`
    );
  }
}
