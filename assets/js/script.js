let frase = document.getElementById('frase');
let autor = document.getElementById('autor');

frase.addEventListener('mouseover', () => {
    autor.classList.add('block');
});

frase.addEventListener('mouseout', () => {
    autor.classList.remove('block');
});