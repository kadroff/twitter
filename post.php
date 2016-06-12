<?php
  require 'database_connection.php';

  if (isset($_POST['content']))
  {
    $content = $_POST['content'];
    print_r($content);
    $mysqli->query("INSERT INTO twits (content, image) VALUES('$content', 'test')");

    $uploaddir = 'images/';
    $uploadfile = $uploaddir . basename($_FILES['image']['name']);
    // move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile);

    echo '<pre>';
    if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile)) {
        echo "Файл корректен и был успешно загружен.\n";
    } else {
        echo "Возможная атака с помощью файловой загрузки!\n";
    }

    echo 'Некоторая отладочная информация:';
    print_r($_FILES);

    print "</pre>";

    /* Перенаправление браузера на другую страницу в той же директории, что и
    изначально запрошенная */
    $host  = $_SERVER['HTTP_HOST'];
    $uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
    header("Location: http://$host$uri/");
    exit;
  }
