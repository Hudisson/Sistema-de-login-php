<?php 
session_start(); // Chama a sessão atual em uso;

//session_unregister('numLogin');

unset($_SESSION['numLogin']);    //<- Desfaz o número randômico da variavel;
session_destroy();				// <- Encerra a sessão chamda na linha 2;
header('Location: index.php'); //<- Redereciona para a página de login 'index.php'.

?>