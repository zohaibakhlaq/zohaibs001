<?php
$countter="";
print("<h1>For Loop</h1>");
print("<h1>Normal</h1>");
for ($counter=1; $counter <=10; $counter++) { 
    # code...
    print("Value Stored is :".$counter."<br/>");
}


$counter="";
print("<h1>Inverse</h1>");
for ($counter=10; $counter >=1; $counter--) { 
    # code...
    print("Value Stored is :".$counter."<br/>");
}

//$counter="";
print("<h1>Even no</h1>");
for ($counter=2; $counter <=10; $counter+=2) { 
    # code...
    print("Value Stored is :".$counter."<br/>");
}//
$table=2;
$counter;
for ($counter=1; $counter <=10; $counter++) 
{ 
  
    echo $table ." * ".$counter."=" .($table * $counter)."<br/>";
}


print ("<h1>Whil Loop</h1>");
print ("<h1>Normal</h1>");
$counter =1;
while($counter <=10)
{
    echo "Current Value is :".$counter."<br/>";
    $counter++;
}
print ("<h1>Whil Loop</h1>");
print ("<h1>Even No</h1>");
$counter =2;
while($counter <=10)
{
    echo "Current Value is :".$counter."<br/>";
    $counter++;
}
?>