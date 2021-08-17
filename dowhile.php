<?php
print("<h1>Do while Loop</h1>");
print("<h2>Normal</h2>");
$counter=21;
do{
    echo "Current Value is :" .$counter."<br/>";
    $counter++;
}
while($counter<=20);

print("<h1>Do while Loop</h1>");
print("<h2>Normal</h2>");
$counter=1;
do{
    echo "Current Value is :" .$counter."<br/>";
    $counter++;
}
while($counter<=20);



print("<h1>Do while Loop</h1>");
print("<h2>Table</h2>");
$counter=1;
$table=3;
do{
    echo $table ." * ".$counter."=" .($table * $counter)."<br/>";
    $counter++;
}
while($counter<=10);
?>