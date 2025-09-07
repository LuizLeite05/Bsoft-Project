//Este código JavaScript é usado para validar uma senha quando um formulário é submetido. 


document.addEventListener("DOMContentLoaded", function(){
    // Este trecho de código será executado quando a página HTML terminar de carregar.

    // Obtém a referência para o formulário
    const form = document.querySelector("form");

    // Obtém a referência para o campo de senha
    const senhaUsuario = document.getElementById("senha");

    // Adiciona um evento de escuta para quando o formulário for submetido
    form.addEventListener("submit", function(e){
        // Este bloco de código será executado quando o formulário for submetido.

        // Verifica se a senha não é válida
        if(!isSenhaValid(senhaUsuario.value)){
             // Previne o comportamento padrão de submissão do formulário
            e.preventDefault();
            // Se a senha não for válida, mostra a mensagem de erro
            document.querySelector(".erroSenha").style.display = "flex";
        } else{
            // Se a senha for válida, esconde a mensagem de erro
            document.querySelector(".erroSenha").style.display = "none";
        }
    });

    // Função para verificar se a senha é válida
    function isSenhaValid(senha){
        // Verifica se a senha possui menos de 5 caracteres
        if(senha.length < 5){
            return false;
        }

        // Define expressões regulares para verificar a presença de letras, números e caracteres especiais na senha
        const letraRegex = /[a-zA-Z]/;
        const numeroRegex = /[0-9]/;
        const caractereEspecialRegex = /[!@#$%^&*()_+{}\[\]:;<>,.?~\\-]/;

        // Verifica se a senha atende aos critérios de validade
        return letraRegex.test(senha) && numeroRegex.test(senha) && caractereEspecialRegex.test(senha);
    }
});

