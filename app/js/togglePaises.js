export default function togglePaises(buttons, target) {
  const buttonsArray = document.querySelectorAll(buttons);
  const targetArray = document.querySelectorAll(target);

  buttonsArray.forEach((button, index) => {
    button.addEventListener('click', (e) => {
      e.preventDefault();

      targetArray[index].classList.toggle('ativo');
    });
  });
}
