<?php

session_start();

$result = "Test. ";

if ($_SESSION['in'] == FALSE)
{
  $result .= "Out of session.";
}
else
{
  $result .= "In session.";
}

echo $result;

?>
