const imageWrapper = document.querySelector('.image-wrapper');
const images = document.querySelectorAll('.animated-image');

function animateImages() {
    // Define a posição inicial do wrapper fora da tela à esquerda
    imageWrapper.style.transform = 'translateX(0)';

    // Calcula a largura total do wrapper
    const totalWidth = Array.from(images).reduce((total, img) => total + img.clientWidth + 30, 0); // 50 é o margin-right

    // Define a animação
    imageWrapper.animate([
        { transform: 'translateX(0)' }, // Posição inicial
        { transform: `translateX(${-totalWidth/2}px)` } // Posição final (metade da largura total)
    ], {
        duration: 10000, // Duração da animação em milissegundos
        iterations: Infinity // Loop infinito
    });
}

// Inicia a animação
animateImages();