
<!DOCTYPE html>
<HTML>
<head>

	<meta charset="utf-8">
	<title>Ostatnie odwiedziny</title>
	
</head>
<body>

<h1>Ostatnie odwiedziny</h1>

<?php
 	if(!isset($_COOKIE['wizyta']))
 	{
 		setcookie('wizyta', time(), time() + 30 * 86400);
 		echo 'Witaj, gosciu.';
 	}
 	else
 	{
 		setcookie('wizyta', time(), time() + 86400);
 		echo 'Witaj, ostatni raz odwiedziłeś nas '.date('d.m.Y, H:i', $_COOKIE['wizyta']);	
 	}
 
?>

	</br></br></br>
	<form action="ostodw.php" method="post">
		<input type = "submit" name ="usun" value="Usuń cookies"/>
	</form>
	
<?php

if (isset($_POST['usun'])) {
	setcookie('wizyta', time()-3600);
		echo 'ciasteczka zostały usunięte<br>';
	
}

?>
	

</body>
</html>