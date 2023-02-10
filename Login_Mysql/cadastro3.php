<html>
<head>
<title> Valores cadastrados </title>
</head>
<body>
<?php
$usr_id = $_COOKIE['login'];
$con=mysql_connect('localhost', 'root', '');
$db=mysql_select_db('Infasstec');
$qr= "SELECT c_custo, c_despesa FROM usuarios WHERE nome = '$usr_id'";
$sql=mysql_query($qr, $con) or die (mysql_errno($con));
while($aux = mysql_fetch_assoc($sql)) { 
    echo "-----------------------------------------<br />";
    #echo "ID: $usr_id";
    echo "Centro de custo:".$aux['c_custo']."<br />"; 
    echo "Despesa:".$aux['c_despesa']."<br />"; 
  }
?>
<a href="login.html">Sair</a>
<a href="cadastro2.html">Voltar</a>
</body>
</html>