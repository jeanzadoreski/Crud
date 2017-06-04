<?php
include_once 'dbconfig.php';

if(isset($_GET['delete_id']))
{
	$sql_query="DELETE FROM empresa WHERE id=".$_GET['delete_id'];
	mysql_query($sql_query);
	header("Location: $_SERVER[PHP_SELF]");
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cadastro de Empresas</title>
<link rel="stylesheet" href="style.css" type="text/css" />

<script type="text/javascript">
function edt_id(id)
{
	if(confirm('Deseja Alterar a empresa ?'))
	{
		window.location.href='edit_data.php?edit_id='+id;
	}
}
function delete_id(id)
{
	if(confirm('Deseja excluir a empresa ?'))
	{
		window.location.href='index.php?delete_id='+id;
	}
}
</script>
</head>
<body>
<center>

<div id="header">
	<div id="content">
    <label>Cadastro de Empresas</label>
    </div>
</div>

<div id="body">
	<div id="content">
    <table align="center">
    <tr>
    <th colspan="8"><a href="add_data.php">Adicionar nova Empresa</a></th>
    </tr>
    <th>Razao social</th>
    <th>Nome fantasia</th>
    <th>CNPJ</th>
    <th>DDD</th>
    <th>Telefone</th>
    <th colspan="3">Site</th>
    </tr>
    <?php
	$sql_query="SELECT * FROM empresa";
	$result_set=mysql_query($sql_query);
	if(mysql_num_rows($result_set)>0)
	{
        while($row=mysql_fetch_row($result_set))
		{
		?>
            <tr>
            <td style="font-size:12px; font-style:italic"><?php echo $row[1]; ?></td>
            <td style="font-size:12px; font-style:italic"><?php echo $row[2]; ?></td>
            <td style="font-size:12px; font-style:italic"><?php echo $row[3]; ?></td>
		 <td style="font-size:12px; font-style:italic"><?php echo $row[4]; ?></td>
		 <td style="font-size:12px; font-style:italic"><?php echo $row[5]; ?></td>
		 <td style="font-size:12px; font-style:italic"><?php echo $row[6]; ?></td>

            <td align="center"><a href="javascript:edt_id('<?php echo $row[0]; ?>')"><img src="b_edit.png" align="EDIT" /></a></td>
            <td align="center"><a href="javascript:delete_id('<?php echo $row[0]; ?>')"><img src="b_drop.png" align="DELETE" /></a></td>
            </tr>
        <?php
		}
	}
	else
	{
		?>
        <tr>
        <td colspan="8">Nenhum dado encontrado !</td>
        </tr>
        <?php
	}
	?>
    </table>
    </div>
</div>

</center>
</body>
</html>
