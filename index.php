<?php
  //phpinfo();

  //Strings
  $string = "Goodmorning";

  //Integers
  $integer = 2;

  //Floats
  $float = 3.5;

  //Booleans
  $boolean = false;

  //Arrays
  $array = array("item 1", "item 2", "item 3");

  //Objects
  class Me {
    function Me(){
      $this->name = "Katherine";
      $this->gender = "Female";
    }
  }

  $myself = new Me();

  $null = null;

  define("SITETITLE", "This is a constant variable");

  // var_dump($array);
  // print_r($array);
  echo "<pre>";
    print_r($array);
  echo "</pre>";

  //If statements
  if($boolean === true){
    echo "the boolean is true";
    echo "<br>";
  } else {
    echo "the boolean is false";
    echo "<br>";
  }

  //Loops
  for ($i=0; $i < count($array); $i++) {
    echo "<br>";
    echo $array[$i];
  }

  // die($string);

  $favouriteColours = array(
    "Simon" => "green",
    "Brayden" => "purple",
    "Ryley" => "red"
  );

  echo "<br>";

  foreach ($favouriteColours as $person => $value) {
    echo "<br>";
    echo $person . "\"s favourite colour is ". $value;
  }

  $class = array(
    "Simon" => array(
      "age" => 19,
      "colour" => "green",
      "food" => "Sushi",
      "town" => "Ngaio",
      "fullLicence" => false
    ),
    "Brayden" => array(
      "age" => 21,
      "colour" => "purple",
      "food" => "Sushi",
      "town" => "Brown Owl",
      "fullLicence" => true
    ),
    "Ryley" => array(
      "age" => 19,
      "colour" => "red",
      "food" => "Garlic Bread",
      "town" => "Tawa",
      "fullLicence" => false
    ),
    "Andy" => array(
      "age" => 26,
      "colour" => "blue",
      "food" => "Fish tacos",
      "town" => "Lower Hutt",
      "fullLicence" => false
    ),
    "Katherine" => array(
      "age" => 18,
      "colour" => "Purple",
      "food" => "Pizza",
      "town" => "Tawa",
      "fullLicence" => true
    ),
    "Larissa" => array(
      "age" => 19,
      "colour" => "green",
      "food" => "food",
      "town" => "wadestown",
      "fullLicence" => false
    ),
    "Sophie" => array(
      "age" => 32,
      "colour" => "peach",
      "food" => "avocado",
      "town" => "paraparaumu",
      "fullLicence" => true
    ),
    "Annie" => array(
      "age" => 17,
      "colour" => "blue",
      "food" => "pizza",
      "town" => "Taita",
      "fullLicence" => false
    )
  );

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title><?php echo "PHP Introduction" ?></title>
  </head>
  <body>
     <!-- <h3>Our String Variable Is:   </h3> <?php echo $string; ?>
     <h3>Our Integer Variable Is:  </h3> <?php echo $integer; ?>
     <h3>Our Float Variable Is:    </h3> <?php echo $float; ?>
     <h3>A Object Value Is:        </h3> <?php echo $myself->name; ?>
     <h3>Our Constant Variable Is: </h3> <?php echo SITETITLE; ?>
     <h3>Our Boolean Variable Is:  </h3> <?php echo $boolean; ?>
     <h3>Our Null Variable Is:     </h3> <?php echo $null; ?>

     <h3>A Value In My Array Is:     </h3> <?php echo $array[0]; ?> -->

     <?php
       /*foreach ($class as $classMember => $details) {
         echo "<div>";
            echo "<h3>".$classMember."</h3>";
            echo "<p>".$details["age"]." years old </p>";
         echo "</div>";
       }*/
     ?>

     <?php foreach ($class as $classMember => $details) { ?>
        <div class="">
          <h3><?php echo $classMember; ?></h3>
          <p><?php echo $details["age"]; ?> years old</p>
          <p>Their favourite food is <?php echo $details["food"]; ?></p>
          <p>They live in <?php echo $details["town"]; ?></p>
        </div>
     <?php } ?>

  </body>
</html>
