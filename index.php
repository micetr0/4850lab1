<!DOCTYPE html>

<html>  
    <head>
        <meta http.equiv="Content-Type" content=" text/html; charset=UTF-8">
        <title></title>
    </head>
    
    <body>
        <?php

        ?>
    </body>
    
    function winner($token,$position) {
    $won = false;
    if  (($position[0]==$token) && 
        ($position[1] == $token) &&
        ($position[2]==$token))    {

    $won == true;
        }  else if  ($position[3] ==$token) &&
              ($postition[4] ==$token) &&
              ($position[5]==$token))
        {
 //add more conditionals
 }    
 return $won;
}
</html>