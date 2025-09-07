// Função que simula o efeito de digitação em um elemento HTML.
function typeWriter(legendaElement, texto, callback) {
  const velocidadeDigitacao = 30; // Define a velocidade de digitação em milissegundos (quanto menor, mais rápido)
  let i = 0;

  function digitar() {
    if (i < texto.length) {
      legendaElement.textContent += texto.charAt(i);
      i++;
      setTimeout(digitar, velocidadeDigitacao);
    } else {
      if (typeof callback === 'function') {
        callback();
      }
    }
  }

  digitar();
}

// Função para mostrar uma legenda em um elemento HTML.
function mostrarLegenda(legendaId) {
  const legendaElement = document.getElementById(legendaId);
  const textoCompleto = legendaElement.getAttribute("data-texto");

  legendaElement.style.display = "flex"; // Exibe a legenda com o estilo 'flex'
  legendaElement.textContent = ""; // Limpa o conteúdo da legenda

  typeWriter(legendaElement, textoCompleto); // Chama a função de digitação para exibir o texto da legenda.
}

// Função para ocultar uma legenda em um elemento HTML.
function esconderLegenda(legendaId) {
  const legendaElement = document.getElementById(legendaId);

  legendaElement.style.display = "none"; // Oculta a legenda definindo o estilo 'display' como 'none'
  legendaElement.textContent = ""; // Limpa o conteúdo da legenda
}

