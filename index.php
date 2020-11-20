<?php include './php/init.php'; ?>
<?php include './php/getContent.php'; ?>


<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo getTitle($unitId); ?></title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/menu.css">
    <link href=
    'https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/ui-lightness/jquery-ui.css'
          rel='stylesheet'>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
    <script src = "js/ex1.js"> </script>
    <script src = "js/ex2-3.js"> </script>
    <script src = "js/getTranslate.js"></script>
</head>
<body>

    <section class="main">
        <div class="container">
            <nav class="header">
                <h1 class="title">English for IT - cybersecurity.</h1>
            </nav>
            <div class="maintext">
                <h2 class="subtitle">
                  <?php echo getUnitTitle($link, $unitId); ?>
                </h2>

                  <?php echo getMain($unitId); ?>

                    <div class="activities text">
                      <hr>
                      <br>
                      <h3>ACTIVITIES:</h3><br>
                        <?php echo getActivities($unitId); ?>
                        <hr>
                      </div>
                      <div class="vocabulary_exercises text">
                            <h3>VOCABULARY EXERCISES</h3>
                            <br>
                              <?php echo getExercises($unitId); ?>
                      </div>
                      <div class="supplementary_activities text">
                        <h3>SUPPLEMENTARY ACTIVITIES</h3>
                        <br>
                        <h3>GRAMMAR</h3>
                        <br>
                        <?php echo getSupp($unitId); ?>
                        <br> <br>
                      </div>
                </div>
        </div>

<span class = "word" id="word"></span>
    </section>

    <selection class="menu">

        <ul>
            <li><a href="#" class="button">UNITS</a>
                <ul>
                    <?php echo getMenu($link); ?>
                </ul>
            </li>


        </ul>
    </selection>
</body>
</html>
