<?php
$usr_id = $_COOKIE['login'];
$c_custo = $_POST['c_custo'];
$c_despesa = $_POST['c_despesa'];
$connect = mysql_connect('localhost','root','');
$db = mysql_select_db('Infasstec');
$query_select = "SELECT id, c_custo, c_despesa FROM usuarios WHERE ID = '$usr_id'";
$select = mysql_query($query_select,$connect);
$modify = "UPDATE usuarios SET c_custo = '$c_custo', c_despesa = '$c_despesa' WHERE nome  = '$usr_id'";
$result = mysql_query($modify,$connect);
if (!$result)
{
    echo"<script language='javascript' type='text/javascript'>
        alert('Falha ao inserir os dados');window.location.
        href='cadastro2.html'</script>";

}
else
{
    if ($c_custo == "" || $c_despesa == "")
    {
        echo"<script language='javascript' type='text/javascript'>
            alert('Favor inserir os valores corretamente');window.location.
            href='cadastro2.html'</script>";
    }
    else
    {
        echo"<script language='javascript' type='text/javascript'>
            alert('Dados inseridos com sucesso!');window.location.
            href='cadastro2.html'</script>";
    }
    
}
?>