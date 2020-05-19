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

  carrosselWrapper.addEventListener('mousedown', (e) => {
    e.preventDefault();

    cliqueInicial = e.clientX;

    carrosselWrapper.addEventListener('mousemove', moverCarrossel);
  });

  carrosselWrapper.addEventListener('mouseup', (e) => {
    e.preventDefault();

    cliqueFinal = e.clientX;

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

    carrosselWrapper.removeEventListener('mousemove', moverCarrossel);
  });

  function moverCarrossel(e) {
    e.preventDefault();

    carrosselWrapper.style.setProperty(
      'transform',
      `translate3d(${-(e, cliqueInicial - e.clientX)}px, 0, 0)`
    );
  }
}
