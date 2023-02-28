<?php
$despesa = $_POST['despesa'];
$ativo = $_POST['despesa_ativo'];
$valor = $_POST['valor'];

if (!$despesa)
{
    echo"<script language='javascript' type='text/javascript'>
        alert('Nenhuma despesa inserida.');window.location.
        href='cadastro_despesas.php'</script>";
}
if (!$valor)
{
    echo"<script language='javascript' type='text/javascript'>
        alert('Nenhum valor inserido.');window.location.
        href='cadastro_despesas.php'</script>";
}
if (ctype_alpha($despesa) == true)
{
    $connect = mysql_connect('localhost','root','');
    $db = mysql_select_db('Infasstec');
    $query_select = "SELECT descricao, ativo, valor, codcentro FROM despesa";
    $select = mysql_query($query_select,$connect);
    $query = "INSERT INTO despesa (descricao,valor,ativo) VALUES ('$despesa','$valor','$ativo')";
    $insert = mysql_query($query,$connect);
}
else
{
    echo"<script language='javascript' type='text/javascript'>
        alert('Favor utilizar apenas letras no campo Despesa.');window.location.
        href='cadastro_despesas.php'</script>";
}

$custo = $_POST['custo'];
if ($custo)
{
    $cod_custo_select = "SELECT codigo FROM centrocusto WHERE descricao = '$custo'";
    $custo_select = mysql_query($cod_custo_select,$connect);
    $row = mysql_fetch_array($custo_select);
    $codigo = $row['codigo'];
    $cod_custo_insert = "UPDATE despesa SET codcentro = '$codigo' WHERE descricao = '$despesa'";
    $insert_cod = mysql_query($cod_custo_insert,$connect);
}
else
{
    echo"<script language='javascript' type='text/javascript'>
        alert('Selecione um centro de custo.');window.location.
        href='cadastro_despesas.php'</script>";
}


if($insert_cod && $insert)
{
    echo"<script language='javascript' type='text/javascript'>
        alert('Valor cadastrado com sucesso!');window.location.
        href='menu.html'</script>";
}
else
{
    echo"<script language='javascript' type='text/javascript'>
        alert('Nao foi possivel cadastrar esse valor');window.location
        .href='cadastro_despesas.php'</script>";
}
?>