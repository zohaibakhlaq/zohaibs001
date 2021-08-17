<?php
$username="usman";
$password="123";

if($username =="usman"|| $username =="Ali")
{
    echo "<br/>$username</b> Valid Username </br>";
    if($password==123|| $password==456)
    {
        
        echo "<br>Password Is correct.</br>";
        echo"<br/> Succuessfully Loged In .<br/>";
    }
    else
    {
        echo "<br/>$username</b> Valid Username.</br";
    }
}
else
{
    echo "</br><b>$username</b> Invalid UserName";
}


?>