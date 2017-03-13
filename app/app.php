<?php
  date_default_timezone_set('America/Los_Angeles');
  require_once __DIR__."/../vendor/autoload.php";
  require_once __DIR__."/../src/Triangle.php";

  $app = new Silex\Application();

  $app->get("/", function(){
    return "
      <!DOCTYPE html>
      <html>
        <head>
          <meta charset='utf-8'>
          <title>Carlot</title>
        </head>
        <body>

          <form action='/result'>

              <label for='sideOne'>Side One</label>
              <input id='sideOne' name ='sideOne' type ='number'>
              <label for='sideTwo'>Side Two</label>
              <input id='sideTwo' name ='sideTwo' type ='number'>
              <label for='sideThree'>Side Three</label>
              <input id='sideThree' name ='sideThree' type ='number'>

            <button type='submit'>button</button>
          </form>

        </body>
      </html>
    ";
  });

  $app->get("/result", function(){
    $test = new Triangle ($_GET['sideOne'],$_GET['sideTwo'],$_GET['sideThree']);
  //  $test->triangle();
    return "
          <p>" . $test->triangle() . "</p>";
  });

  return $app;
?>
