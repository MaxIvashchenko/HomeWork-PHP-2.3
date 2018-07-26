<?php
if (!empty($_FILES["testFile"]["name"]))  {
    $filename=$_FILES["testFile"]["name"];
    $test_array=explode(".", $filename);
     
      if ($test_array[1] == "json")  
      {
        move_uploaded_file($_FILES["testFile"]["tmp_name"], "tests/" . $_FILES["testFile"]["name"]);
        header("Location: ./list.php");  }

    else
      {
        echo "<i>Ошибка</i>";
      }
  }
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Домашнее задание к лекции 2.2</title>
    <meta charset="UTF-8">
</head>
<body>
<form enctype="multipart/form-data" method="post">
  <h2>Выберите файл</h2>
  <input type="file" name="testFile"><br><br>
  <input type="submit" value="Отправить тест">
</form>

</body>
</html>
