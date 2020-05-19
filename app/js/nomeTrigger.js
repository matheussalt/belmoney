export default function nomeTrigger() {
  const nomes = document.querySelectorAll('.nomes button');
  const descricoes = document.querySelectorAll('.descricao-item');
  const leftButton = document.querySelector('.descricao-left');
  const rightButton = document.querySelector('.descricao-right');
  let position = 0;

  if (!nomes || !descricoes || !leftButton || !rightButton) return null;

  nomes.forEach((nome, index) => {
    nome.addEventListener('click', (e) => {
      e.preventDefault();

      descricoes.forEach((descricao) => {
        descricao.classList.remove('active');
      });

      descricoes[index].classList.add('active');
      position = index;

      window.scrollTo({
        left: 0,
        top:
          window.scrollY + (descricoes[index].getBoundingClientRect().y - 64),
        behavior: 'smooth',
      });
    });
  });

  leftButton.addEventListener('click', (e) => {
    e.preventDefault();

    if (position > 0) {
      position--;

      descricoes.forEach((descricao) => {
        descricao.classList.remove('active');
      });
      descricoes[position].classList.add('active');
    }
  });

  rightButton.addEventListener('click', (e) => {
    e.preventDefault();

    if (position < nomes.length - 1) {
      position++;

      descricoes.forEach((descricao) => {
        descricao.classList.remove('active');
      });
      descricoes[position].classList.add('active');
    }
  });
}
