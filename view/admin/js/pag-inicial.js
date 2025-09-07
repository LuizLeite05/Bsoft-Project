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
function mostrarLegenda(legendaId) {
  const legendaElement = document.getElementById(legendaId);
  const textoCompleto = legendaElement.getAttribute("data-texto");

  legendaElement.style.display = "flex";
  legendaElement.textContent = ""; // Limpa o conteúdo da legenda

  typeWriter(legendaElement, textoCompleto);
}
function esconderLegenda(legendaId) {
  const legendaElement = document.getElementById(legendaId);
  legendaElement.style.display = "none";
  legendaElement.textContent = ""; // Limpa o conteúdo da legenda
}
