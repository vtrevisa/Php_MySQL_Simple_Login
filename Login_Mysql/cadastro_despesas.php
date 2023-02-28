<html>
<head>
    <title> Cadastro de Valores </title>
</head>
<body>
    <?php
        $connect = mysql_connect('localhost','root','');
        $db = mysql_select_db('Infasstec');
        $query_select = "SELECT descricao FROM centrocusto";
        $select = mysql_query($query_select,$connect);
    ?>
    <strong>Cadastro de Despesas:</strong><br>
    <br>
    <form method="POST" action="cadastro_despesa.php">
        <label>Centro de Custo: </label>
            <select name="custo" id="custo" size="1">
                <option value=''> </option>  
                <?php 
                    while ($row = mysql_fetch_array($select))
                    {
                        $descricao = $row['descricao'];
                        echo "<option value=\"$descricao\">". $descricao. "</option>";
                    }
                ?>         
            </select>
        <br>
        <br>
        <label>&emsp;&emsp;&emsp;Despesa:</label>
            <input type="text" name="despesa" id="despesa" size="25">
            <input type="checkbox" name="despesa_ativo" id="despesa_ativo" value=1>
            <label for="despesa_ativo"> Inativo</label>
            <br><br>
        <label>&emsp;&emsp;&emsp;&emsp;Valor: </label>
            <input type="number" min="1" step="any" name="valor" id="valor" size="4"><br><br>
        &emsp;<input type="submit" value="Gravar" id="gravar" name="gravar">
        <br><br>
        &emsp;<a href="menu.html">Voltar</a>
    </form>
</body>
</html>