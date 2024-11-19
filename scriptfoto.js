//fotos minhahs

let currentSlide = 0; // Índice do slide atual
const slides = document.querySelectorAll('.carrossel-image');

function showSlide(index) {
    // Oculta todas as imagens
    slides.forEach(slide => slide.classList.remove('active'));

    // Calcula o índice do slide atual
    if (index >= slides.length) {
        currentSlide = 0; // Volta para o primeiro slide
    } else if (index < 0) {
        currentSlide = slides.length - 1; // Vai para o último slide
    } else {
        currentSlide = index; // Atualiza o índice atual
    }

    // Exibe a imagem ativa
    slides[currentSlide].classList.add('active');
}

function changeSlide(direction) {
    showSlide(currentSlide + direction);
}

// Exibe o primeiro slide ao carregar a página
showSlide(currentSlide);



// foto familia

function expandirImagem(imagem) {
    // Obter o contêiner da imagem ampliada e a imagem ampliada
    const imagemAmpliada = document.getElementById('imagem-ampliada');
    const imagemAmpliadaSrc = document.getElementById('imagem-ampliada-src');

    // Definir a fonte da imagem ampliada como a fonte da imagem clicada
    imagemAmpliadaSrc.src = imagem.src;

    // Exibir o contêiner da imagem ampliada
    imagemAmpliada.style.display = 'flex';
}

function fecharImagem() {
    // Obter o contêiner da imagem ampliada
    const imagemAmpliada = document.getElementById('imagem-ampliada');

    // Esconder o contêiner da imagem ampliada
    imagemAmpliada.style.display = 'none';
}

















































