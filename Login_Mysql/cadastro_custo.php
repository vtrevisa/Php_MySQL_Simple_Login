<?php
$descricao = $_POST['custo'];
$ativo = $_POST['custo_ativo'];
if (!$descricao)
{
    echo"<script language='javascript' type='text/javascript'>
        alert('Nenhum centro de custo inserido.');window.location.
        href='cadastro_custo.html'</script>";
}
if (!ctype_alpha($descricao))
{
    echo"<script language='javascript' type='text/javascript'>
        alert('Favor utilizar apenas letras.');window.location.
        href='cadastro_custo.html'</script>";
}
$connect = mysql_connect('localhost','root','');
$db = mysql_select_db('Infasstec');
$query_select = "SELECT descricao, ativo FROM centrocusto";
$select = mysql_query($query_select,$connect);
$query = "INSERT INTO centrocusto (descricao,ativo) VALUES ('$descricao','$ativo')";
$insert = mysql_query($query,$connect);
if($insert)
{
    echo"<script language='javascript' type='text/javascript'>
        alert('Valor cadastrado com sucesso!');window.location.
        href='menu.html'</script>";
}
else
{
    echo"<script language='javascript' type='text/javascript'>
        alert('Não foi possível cadastrar esse valor.');window.location
        .href='cadastro_custo.html'</script>";
}
?>