<p> Работа с числом e:
<p>
<?php
$N=rand(1,1000);
echo ('возьмем число от 1 до 1000');
echo('<br>');
echo('<br>');
echo ('Наше натуральное число N ='.($N));
echo('<br>');
echo('<br>');
echo ('Eго натуральные делители:');
echo('<br>');
echo('<br>');
for ($i=1; $i<=$N; $i++)
{
$X = $N / $i;
if (is_integer($X))
{echo ($i . '<br>'); 
}
else {echo ('');
}
}
?>
<html>
<head>
	<nav>
	<p><a href="index.php">Главное меню</a></p> 
	</nav>
</head>
</html>		
