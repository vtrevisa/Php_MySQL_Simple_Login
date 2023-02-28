<?php
  $login_cookie = $_COOKIE['login'];
    if(isset($login_cookie)){
      echo"<script language='javascript' type='text/javascript'>
          alert('Bem-Vindo, $login_cookie. Acesso liberado!');window.location.
          href='menu.html'</script>";
    }else{
      echo"Bem-Vindo, convidado <br>";
      echo"Essas informações <font color='red'>NÃO PODEM</font> ser acessadas por você";
      echo"<br><a href='login.html'>Faça Login</a> Para ler o conteúdo";
    }
?>
