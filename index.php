<?php
  //phpinfo();

  //Strings
  $string = 'Goodmorning';

  //Integers
  $integer = 2;

  //Floats
  $float = 3.5;

  //Booleans
  $boolean = false;

  //Arrays
  $array = array('item 1', 'item 2', 'item 3');

  //Objects
  class Me {
    function Me(){
      $this->name = 'Katherine';
      $this->gender = 'Female';
    }
  }

  $myself = new Me();

  $null = null;

  define('SITETITLE', 'This is a constant variable');

  // var_dump($array);
  // print_r($array);
  echo '<pre>';
    print_r($array);
  echo '</pre>';

  // die($string);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title><?php echo 'this is the page title' ?></title>
  </head>
  <body>
     <h3>Our String Variable Is:   </h3> <?php echo $string; ?>
     <h3>Our Integer Variable Is:  </h3> <?php echo $integer; ?>
     <h3>Our Float Variable Is:    </h3> <?php echo $float; ?>
     <h3>A Object Value Is:        </h3> <?php echo $myself->name; ?>
     <h3>Our Constant Variable Is: </h3> <?php echo SITETITLE; ?>
     <h3>Our Boolean Variable Is:  </h3> <?php echo $boolean; ?>
     <h3>Our Null Variable Is:     </h3> <?php echo $null; ?>


     <h3>A Value In My Array Is:     </h3> <?php echo $array[0]; ?>
  </body>
</html>
