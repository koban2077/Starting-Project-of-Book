<?php
include 'php/init.php';

if (empty($_GET['unit'])){
  $unitId = 1;
} else {
  $unitId = trim(mysqli_real_escape_string($link, $_GET['unit']));
}

$data = $_POST['word_core'];

$data = str_replace('"', '', $data);
$word = mysqli_real_escape_string($link, mb_strtolower(trim("$data")));


$table = "dict" . $unitId;
$query = "SELECT ukr_word FROM $table WHERE engl_word = '$word'";
$result = mysqli_query($link, $query);

if (mysqli_num_rows($result) > 0){

$text = mysqli_fetch_assoc($result)['ukr_word'];
printf($text);


  }
?>
