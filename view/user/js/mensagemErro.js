//Este código JavaScript é usado para validar os campos de um formulário quando ele é submetido.

document.addEventListener("DOMContentLoaded", function(){
    // Este trecho de código será executado quando a página HTML terminar de carregar.

    // Obtém a referência para o formulário
    const form = document.querySelector("form");

    // Obtém a referência para o campo de senha
    const senhaUsuario = document.getElementById("senha");

    // Obtém a referência para o campo de email pelo ID
    const emailUsuario = document.getElementById("email");

    // Adiciona um evento de escuta para quando o formulário for submetido
    form.addEventListener("submit", function(e){
        // Este bloco de código será executado quando o formulário for submetido.

        // Verifica se o email não é válido
        if(!isEmailValid(emailUsuario.value)){
            // Se o email não for válido, previne o comportamento padrão de submissão do formulário
            e.preventDefault();

            // Mostra a mensagem de erro para o email
            document.querySelector(".erroEmail").style.display = "flex";
        } else{
            // Se o email for válido, esconde a mensagem de erro
            document.querySelector(".erroEmail").style.display = "none";
        }

        // Verifica se a senha não é válida
        if(!isSenhaValid(senhaUsuario.value)){
            // Se a senha não for válida, previne o comportamento padrão de submissão do formulário
            e.preventDefault();

            // Mostra a mensagem de erro para a senha
            document.querySelector(".erroSenha").style.display = "flex";
        } else{
            // Se a senha for válida, esconde a mensagem de erro
            document.querySelector(".erroSenha").style.display = "none";
        }

    });

    // Função para verificar se o email é válido
    function isEmailValid(email){
        // Verifica se a string contém o caractere "@"
        return email.includes("@");
    }

    // Função para verificar se a senha é válida
    function isSenhaValid(senha){
        // Verifica se a senha possui menos de 5 caracteres
        if(senha.length < 5){
            return false;
        }

        const letraRegex = /[a-zA-Z]/;
        const numeroRegex = /[0-9]/;
        const caractereEspecialRegex = /[!@#$%^&*()_+{}\[\]:;<>,.?~\\-]/;

        // Verifica se a senha atende aos critérios de validade
        return letraRegex.test(senha) && numeroRegex.test(senha) && caractereEspecialRegex.test(senha);
    }
});


