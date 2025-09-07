<?php
// Essa página verifica se o usuário é administrador antes de prosseguir para uma página de acesso exclusivo do admin
        if(isset($_SESSION['valid'])){
            
            if (($_SESSION['administrador'] == false)) {
                header('Location: ../../view/user/pag-inicial.php');
            } 
        }
    
?>