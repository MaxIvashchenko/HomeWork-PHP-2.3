<?php
$direction  = 'tests';
if(is_dir($direction)) { 
	$files = scandir($direction); 
	array_shift($files);
	array_shift($files);
	} 
?>

<!DOCTYPE html>
<html lang="ru">
<html>
<head>
	<meta charset="utf-8">
	<title>Домашнее задание к лекции 2.2</title>
</head>
<body>
	<h2>Выберите тест:</h2>
	<?php for($i=0; $i<sizeof($files); $i++) { ?>      
	<li><a href="test.php?name=<?php echo $files[$i]; ?>" title="перейти к тесту"><?php echo $files[$i]; ?></a></li>
	<?php } ?>
<br><br><br>

<p><a href="admin.php">Вернуться к добавлению</a></p>
</body>
</html>