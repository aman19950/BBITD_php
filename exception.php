<?php 
function divide($dividend, $divisor) {
  if($divisor == 0) {
    
    throw new Exception("Division by zero");
  }
  echo "hello";
  return $dividend / $divisor;
}
try{
 echo divide(5,0);
}
catch(Exception $e){
  echo "unable to divide by zero<br><br>";
}
finally{
  echo "unable to divide by zero inside finally<br><br>";
}

// echo "hello";











// try {
//   echo divide(5, 0);
// } catch(Exception $e) {
//   echo "Unable to divide. ";
// } finally {
//   echo "Process complete.";
// }
?>