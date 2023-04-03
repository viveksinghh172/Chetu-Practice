
<!-- The main reason behind generating a warning error is to pass an incorrect
number of parameters to a function or to include a missing file. -->

<?php
//Include a missing file
$language = "PHP";
echo "Warning error";

include('abc.php');
?>



<!-- Notice Error -->
 <!-- same as the warning but the differenece is, it allows/continue the execution
 of the program wutrh a prior notice. It doesn't prevent the execution of the code.
  Generally, notice error occurs when we try to  use or access which is undefined. -->


  <!-- Example: Access undefined variable -->

  <?php
    $telecom = "Airtel";
    echo $telecom;
    echo $automobile;
  ?>