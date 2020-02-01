<?php
  include 'autoload.php';

  if (isset($_POST["add"])) {
    //Getting values from ajax
    $operator = $_POST["operator"];
    $field1 = $_POST["field1"];
    $field2 = $_POST["field2"];
    //Loading anwser to page
    //Object
    $answer = new Operator($operator,$field1,$field2);
    $result = $answer->calculator();
    //Getting operator type
    if ($operator == "add") {
      $opera = "#007bff";
      $color = "white";
      $sign = "+";
    }elseif ($operator == "sub") {
      $opera = "black";
      $color = "white";
      $sign = "-";
    }elseif ($operator == "mul") {
      $opera = "#600b4a";
      $color = "white";
      $sign = "*";
    }elseif ($operator == "div") {
      $opera = "blueviolet";
      $color = "white";
      $sign = "/";
    }
    //Converting to json
    $jsonresult = array("bg"=>$opera, "result"=>$result, "color"=>$color, "sign"=>$sign);
    echo json_encode($jsonresult);
  }else{
    echo "Am not set";
  }
 ?>
