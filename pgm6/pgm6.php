<?php
print "<h1> Welcome to the Website</h1>";
$name="counter.txt";
$file = fopen($name,"r");
$hits = fscanf($file,"%d");
fclose($file);
$hits[0]++;
$file = fopen($name,"w");
fprintf($file,"%d",$hits[0]);
fclose($file);
print " <h2> Total visitors so far: ".$hits[0];
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Visitor count</title>
        <style>
            h1{
                text-align: center;
                margin-top: 50px;
                color:red;
            }
            h2{
                text-align: center;
                color: black;
            }
        </style>
    </head>
</html>