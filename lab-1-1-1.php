<html>
<head>
	<nav>
	<style>
   .rightpic {
    float: right; /* Выравнивание по правому краю */
    margin: 0 0 5px 5px; /* Отступы вокруг фотографии */
   }
  </style>
	<center><img src="panda2.png" width="300" height="200" 
  alt="Иллюстрация" align="left" 
  vspace="5" hspace="5"></center> 
	</nav>
</head>
</html>
<p> ЗАДАНИЕ №1:
<p>
<?php
 $a=rand(-20,20);
 $b=rand(-20,20);
 $c=rand(-20,20);
 $d=rand(-20,20);

echo ('('.($b).')'.'*(2*'.'('.($c).'))'.'+'.'('.($d).')'.'-52'.'<br>');
echo ('__________________ = '.(($b*2*$c+$d-52)/($a/3+1)).'<br>');
echo ('('.($a).')'.'/'.'3 + 1'.'<br>');
echo ('<br>');
echo ('A = '.$a.'<br>');
echo ('B = '.$b.'<br>'); 
echo ('C = '.$c.'<br>');
echo ('D = '.$d.'<br>');

?>
<html>
<head>
	<nav>
	<p><a href="index.php">Главное меню</a></p> 
	</nav>
</head>
</html>
