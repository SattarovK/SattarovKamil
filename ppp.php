<p> Работа с числом e:
<p>
<?php
$N=rand(1,10);
$T=rand(1,10);
$Z=0;
$L=0;
echo ('возьмем число от 1 до 1000');
echo('<br>');
echo('<br>');
echo ('Наше натуральное число N ='.($N).'<br>');
echo ('Наше натуральное число T= '.($T).'<br>');
echo('<br>');
echo('<br>');
echo ('Eго натуральные делители:');
echo('<br>');
echo('<br>');
for ($i=1; $i<=$N; $i++)
{
$X = $N / $i;
if (is_integer($X))
{echo ($i .'<br>');
$Z = $Z + $i;
}
else {echo ('');
}
}
echo ('Z='.$Z);
echo('<br>');
echo('<br>');
echo('<br>');
echo('<br>');
for ($i=1; $i<=$T; $i++)
{
$X = $T / $i;
if (is_integer($X))
{echo ($i .'<br>');
$L = $L + $i;
}
else {echo ('');
}
}
echo ('L='.$L);
echo('<br>');
echo('<br>');

if ($L == $Z)
{
echo('друг');
}
	else {echo ('враг');
}
?>
<html>
<head>
	<nav>
	<p><a href="index.php">Главное меню</a></p> 
	</nav>
</head>
</html>	