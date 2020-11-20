<?php


if (empty($_GET['unit']) OR $_GET['unit'] > 10 OR !is_numeric($_GET['unit'])){
  $unitId = 1;
} else {
  $unitId = trim(mysqli_real_escape_string($link, $_GET['unit']));
}

function getUnitTitle($link, $unitId){

  $query = "SELECT Title FROM units WHERE id = '$unitId'";
  $result = mysqli_query($link, $query);
  $title = mysqli_fetch_assoc($result)['Title'];

  return $title;

}

function getTitle($unitId)
{
  $title = "Unit $unitId";
  return $title;
}

function getMain($unitId){

  $path = "siteParts/unit$unitId/text.php";

  if (check($path) == true)
  {
      $text = file_get_contents($path);
      return $text;
  }
}

function getMenu($link){

  $query = "SELECT * FROM units";
  $result = mysqli_query($link, $query);

  for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);

  $menu = '';
  foreach ($data as $elem){
    $menu .= "<li><a href=\"index.php?unit={$elem['id']}\"> {$elem['Title']}</a></li>";
  }
  return $menu;

}


function getActivities($unitId){

  $path = "siteParts/unit$unitId/activities.php";

  if (check($path) == true)
  {
      $activities = file_get_contents($path);
      return $activities;
  }

}

function getExercises($unitId){

  $path = "siteParts/unit$unitId/exercises.php";

  if (check($path) == true)
  {
      $exercises = file_get_contents($path);
      return $exercises;
  }

}

function getSupp($unitId){

  $path = "siteParts/unit$unitId/supplementary.php";

  if (check($path) == true)
  {
      $sup = file_get_contents($path);
      return $sup;
  }
}

function check($way)
{

  if (file_exists($way) == true)
  {
    return true;
  }

}

?>
