const btnTema = document.querySelector('.tema');
const body = document.querySelector('body');

btnTema.addEventListener('click', () => {
    body.classList.toggle('light');
    btnTema.textContent = body.classList.contains('light') ? 'Escuro' : 'Claro';

    body.style.animation = 'none';
    body.offsetHeight;
    body.style.animation = 'fadeIn 1.4s ease-in';
});
