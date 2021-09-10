<!DOCTYPE <!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PHP</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="">
    <style>
      #php{
        color: red;
        background-color: black;
        margin-left: auto;
        margin-right: auto;
        width: 350px;
      }
      #php>p{
       background-color: skyblue;
      }
    </style>
  </head>
  <body>
    <?php
    $b = false;
    $b ? print "TRUE" : print "FALSE";
    echo "<br>";
    ?>
  <?php
$author = "Brian W. Kernighan";
echo <<<_E
Debugging is twice as hard as writing the code in the first place.
Therefore, if you write the code as cleverly as possible, you are,
by definition, not smart enough to debug it.
- $author.
_E;
echo "<br>";
echo <<<_E
Debugging is twice as hard as writing the code in the first place.
Therefore, if you write the code as cleverly as possible, you are,
by definition, not smart enough to debug it.
- $author.
_E;
echo "<br>";
echo <<<_E
Debugging is twice as hard as writing the code in the first place.
Therefore, if you write the code as cleverly as possible, you are,
by definition, not smart enough to debug it.
- $author.
_E;
echo "<br>";
?>
<?php
$author = "Scott Adams";
$out = <<<_END
Normal people believe that if it ain't broke, don't fix it.
Engineers believe that if it ain't broke, it doesn't have enough
features yet.
- $author.
_END;

echo " $out <br>";
?>
<?php
$number = 12345 * 67890;
echo "$number <br>";
echo substr($number, 0, 3). "**<br>";
?>
    <?php
      $mycounter = 1;
      $mystring = "Hello";
      $myarray = array("One", "Two", "Three");

      $cube = array(
        array(
          array("1","1","1"),
          array("1","1","1"),
          array("1","1","1")
        ),
        array(
          array("2","2","2"),
          array("2","2","2"),
          array("2","2","2")
        ),
        array(
          array("3","3","3"),
          array("3","3","3"),
          array("3","3","3")
        ),
      );
      for($x =0; $x<=2;++$x){
        for($y =$x; $y<=2;++$y){
          for($z =$y; $z<=2;++$z){
            echo $cube[$x][$y][$z]. " ";
          }
          echo "<br>";
        }
      }
      echo "<div id='php'>";
      echo "<p> $mystring </p>";
      echo "<ul>";
        echo "<li>" . $myarray[0] . "</li>";
        echo "<li>" . $myarray[1] . "</li>";
        echo "<li>" . $myarray[2] . "</li>";
      echo "</ul>";
      echo "<p>I am writing my first php code.</p>";
      echo "<p>I am excited to start it.</p>";
      echo "<p>I <i>hope</i> and <i>pray</i> that I will keep practicing web.</p>";
      echo "<p>Today is " . date("l") . ".</p>";
      echo "</div>"
    ?>
    <p>Here is the latest news.</p>
    <!--[if lt IE 7]>
      <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    
    <script src="" async defer></script>
  </body>
</html>