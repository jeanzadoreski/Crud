<?php
include_once 'dbconfig.php';
if(isset($_GET['edit_id']))
{
	$sql_query="SELECT * FROM empresa WHERE id=".$_GET['edit_id'];
	$result_set=mysql_query($sql_query);
	$fetched_row=mysql_fetch_array($result_set);
}
if(isset($_POST['btn-update']))
{
	
	$razao = $_POST['razao'];
	$nome = $_POST['nome'];
	$cnpj = $_POST['cnpj'];
	$ddd = $_POST['ddd'];
	$telefone = $_POST['telefone'];
	$site = $_POST['site'];
	
	$sql_query = "UPDATE empresa SET razao='$razao',nome='$nome',cnpj='$cnpj',ddd='$ddd',telefone='$telefone',site='$site' WHERE id=".$_GET['edit_id'];
	
	if(mysql_query($sql_query))
	{
		?>
		<script type="text/javascript">
		alert('Os dados foram atualizados com sucesso !');
		window.location.href='index.php';
		</script>
		<?php
	}
	else
	{
		?>
		<script type="text/javascript">
		alert('Ocorreu um erro ao atualizar os dados');
		</script>
		<?php
	}
}
if(isset($_POST['btn-cancel']))
{
	header("Location: index.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cadastro de Empresas</title>
<link rel="stylesheet" href="style.css" type="text/css" />
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
    <form method="post">
    <table align="center">
    <tr>
    <td><input type="text" name="razao" placeholder="Razao Social" value="<?php echo $fetched_row['razao']; ?>" maxlength=25 required /></td>
    </tr>
    <tr>
    <td><input type="text" name="nome" placeholder="Nome Fantasia" value="<?php echo $fetched_row['nome']; ?>" maxlength=50 required /></td>
    </tr>
    <tr>
    <td><input type="text" name="cnpj" placeholder="CNPJ" value="<?php echo $fetched_row['cnpj']; ?>" maxlength=11 required /></td>
    </tr>
    <tr>
    <td><input type="text" name="ddd" placeholder="DDD" value="<?php echo $fetched_row['ddd']; ?>" maxlength=3 required /></td>
    </tr>
    <tr>
    <td><input type="text" name="telefone" placeholder="Telefone" value="<?php echo $fetched_row['telefone']; ?>" maxlength=8 required /></td>
    </tr>
    <tr>
    <td><input type="text" name="site" placeholder="SITE" value="<?php echo $fetched_row['site']; ?>" maxlength=100 required /></td>
    </tr>
    <tr>
    <td>
    <button type="submit" name="btn-update"><strong>ALTERAR</strong></button>
    <button type="submit" name="btn-cancel"><strong>CANCELAR</strong></button>
    </td>
    </tr>
    </table>
    </form>
    </div>
</div>

</center>
</body>
</html>
