<?php
$student=["Alice","Bob","Charlie","Diana","Eve"];
echo"Orignal Array:<br>";
print_r($student);
echo"<br><br>";
asort($student);
echo"Array Sorted in Assending Order:<br>";
print_r($student);
echo"<br><br>";
arsort($student);
echo"Array Sorted in Descending Order:<br>";
print_r($student);
?>