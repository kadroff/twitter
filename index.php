<html>
<body>
  <head>
    <meta charset="utf-8">
    <link href="css.css" rel="stylesheet">

    <script src="jquery-2.2.4.min.js"></script>
    <script src="jquery.js"></script>
  </head>
<body>

  <div class="head container"></div>

 <div class="main container">
   <form method="post" action="">
    <input type="text" name="title"/>
    <input type="text" name="name" placeholder="Добавь имя"/>
    <input type="submit"  value="добавить" class="add_db" />
   </form>
</div>

<?php
    $mysqli = new mysqli ("localhost", "root", "root", "news");
    $mysqli->query("SET NAMES 'utf8' ");

    if (!empty($_POST["title"])) {

        $title = $_POST['title'];

        $result = $mysqli->query("INSERT INTO proshivka (size) VALUES('$title')");

        $print = $mysqli->query("SELECT * FROM `proshivka` ");
    }
        foreach ($print as $value) {
            echo "<input type='text' style='height:90px;' value='".$value['size']."'></input>";
        }

    if (!empty($POST["name"]))
     {
      $name = $_POST['name'];

      $name_result = $mysqli->query("INSERT INTO proshivka (name) VALUES('$name')");

      $name_print = $mysqli->query("SELECT * FROM 'proshivka'");
    }
        foreach ($name_print as $name_value) {
          echo  "<input type='text' style='height:90px;' value='".$name_value['']."'></input>";
        }

    if($result = 'true')

        {echo '<br>'."Ваши данные успешно добавлены";}

    else {echo "Ваши данные не добавлены";}

    $mysqli->close();
?>

</body>
</html>
