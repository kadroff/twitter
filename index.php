<?php
  require 'database_connection.php';
  $twits = $mysqli->query("SELECT * FROM `twits`");
?>
<html>
<head>
  <meta charset="utf-8">
  <title>Твиттер</title>
</head>
<body>

  <div class="main container">

    <form enctype="multipart/form-data" method="post" action="post.php">
      <input type="text" name="content"/>
      <input type="file" name="image" value=""/>
      <input type="submit" value="добавить"/>
    </form>

    <div>
      <?php
        foreach ($twits as $value) {
          echo "<li>" . $value['content'] . "</li>";
        }
      ?>
    </div>

  </div>

</body>
</html>
