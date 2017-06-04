<?php
include_once 'dbconfig.php';
if(isset($_POST['btn-save']))
{
	
	$razao = $_POST['razao'];
	$nome = $_POST['nome'];
	$cnpj = $_POST['cnpj'];
	$ddd = $_POST['ddd'];
	$telefone = $_POST['telefone'];
	$site = $_POST['site'];
	
	
	$sql_query = "INSERT INTO empresa(razao,nome,cnpj,ddd,telefone,site) VALUES('$razao','$nome','$cnpj','$ddd','$telefone','$site')";
		
	if(mysql_query($sql_query))
	{
		?>
		<script type="text/javascript">
		alert('Os dados foram inseridos com sucesso ! ');
		window.location.href='index.php';
		</script>
		<?php
	}
	else
	{
		?>
		<script type="text/javascript">
		alert('Ocorreu um erro ao inserir seus dados !');
		</script>
		<?php
	}
	
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
    <td align="center"><a href="index.php">Voltar para a pagina principal</a></td>
    </tr>
    <tr>
    <td><input type="text" name="razao" placeholder="Razao Social" maxlength=25 required /></td>
    </tr>
    <tr>
    <td><input type="text" name="nome" placeholder="Nome Fantasia" maxlength=50 required /></td>
    </tr>
    <tr>
    <td><input type="text" name="cnpj" placeholder="CNPJ" maxlength=11 required /></td>
    </tr>
    <tr>
    <td><input type="text" name="ddd" placeholder="DDD" maxlength=3 required /></td>
    </tr>
    <tr>
    <td><input type="text" name="telefone" placeholder="Telefone" maxlength=8 required /></td>
    </tr>
    <tr>
    <td><input type="text" name="site" placeholder="SITE" maxlength=100 required /></td>
    </tr>
    <tr>
    <td><button type="submit" name="btn-save"><strong>SALVAR</strong></button></td>
    </tr>
    </table>
    </form>
    </div>
</div>

</center>
</body>
</html>
