<?php
  require 'app_config.php';

  $mysqli = new mysqli (DATABASE_HOST, DATABASE_USERNAME, DATABASE_PASSWORD, DATABASE_NAME)
    or die('не получилось подключиться к БД'); //Подключение к базе данных
?>
