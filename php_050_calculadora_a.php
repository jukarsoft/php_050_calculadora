<?php 
	header('Content-Type: text/html; charset=UTF-8');

	//inicializar variables
	$num1=$num2=$resultado=0;
	$oper='+';

	//comprobar si se ha pulsado 'enviar'
	if (isset($_POST['enviar'])) {
		//recuperar números
		$num1=$_POST['num1'];
		$num2=$_POST['num2'];
		$oper=$_POST['operacion'];
		//realizar cálculo
		switch ($oper) {
			case '+':
				$resultado=$num1+$num2;
				break;
			case '-':
				$resultado=$num1-$num2;
				break;
			case '*':
				$resultado=$num1*$num2;
				break;
			case '*':
				$resultado=$num1*$num2;
				break;
			case '/':
				$resultado=$num1/$num2;
				break;
			case '%':
				$resultado=$num1%$num2;
				break;	
			default:
				$resultado=0;
				break;
		}
		
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h3>calculadora php </h3>
	<form method="post" action="#">
		<input type="number" name="num1" value="<?=$num1;?>">
		<select name='operacion' >
			<option <?php if ($oper=='+') {echo 'selected';}?> >+</option>
			<option <?php if ($oper=='-') {echo 'selected';}?> >-</option>
			<option <?php if ($oper=='*') {echo 'selected';}?> >*</option>
			<option <?php if ($oper=='/') {echo 'selected';}?> >/</option>
			<option <?php if ($oper=='%') {echo 'selected';}?> >%</option>
		</select>
		<input type="number" name="num2" value="<?=$num2;?>">
		<input type="submit" name="enviar">
		<input type="text" disabled value="<?php echo $resultado;?>">
	</form>

</body>
</html>