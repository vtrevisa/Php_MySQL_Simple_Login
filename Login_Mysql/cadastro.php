<?php

$login = $_POST['login'];
$senha = MD5($_POST['senha']);
$connect = mysql_connect('localhost','root','');
$db = mysql_select_db('Infasstec');
$query_select = "SELECT nome FROM usuarios WHERE nome = '$login'";
$select = mysql_query($query_select,$connect);
$array = mysql_fetch_array($select);
$logarray = $array['nome'];

  if($login == "" || $login == null)
  {
    echo"<script language='javascript' type='text/javascript'>
        alert('Nenhum login especificado');window.location.
        href='login.html'</script>";

  }
  else
  {
    if($logarray == $login)
    {
      echo"<script language='javascript' type='text/javascript'>
        alert('Usuario ja cadastrado');window.location.
        href='login.html'</script>";
    }
    else
    {
      $query = "INSERT INTO usuarios (nome,senha) VALUES ('$login','$senha')";
      $insert = mysql_query($query,$connect);
      if($insert)
      {
        echo"<script language='javascript' type='text/javascript'>
        alert('Usuario cadastrado com sucesso!');window.location.
        href='login.html'</script>";
      }
      else
      {
        echo"<script language='javascript' type='text/javascript'>
        alert('Não foi possível cadastrar esse usuário');window.location
        .href='cadastro.html'</script>";
      }
    }
  }
?>