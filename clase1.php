<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?PHP 
		$a=$_POST['a'];
		echo $a."<br>";
		$b=rand(0,10);
		$var1=rand(0,10);
		$var2=rand(0,10);
		/*if($var1%2==0)
		{
			echo "el numero $var1 es par <br>";
		}
		else
		{
			echo "el numero $var1 es impar <br>";
		}
		if($var2%2==0)
		{
			echo "el numero $var2 es par <br>";
		}
		else
		{
			echo "el numero $var2 es impar <br>";
		}*/
		if($var1>$b)
		{
			echo "$var1 <br>";
			echo "a es mayor que b";
		}
		else
		{
			echo "$var1 <br>";
			echo "b es mayor que a";
		}

	 ?>
	
</body>
</html>