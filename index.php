<!DOCTYPE html>

<html>  
    <head>
        <meta http.equiv="Content-Type" content=" text/html; charset=UTF-8">
        <title>tic-tat-toe</title>
    </head>
    
    <body>
    <center><h3>Welcome to the easiest tic-tat-toe ever</h3></center>
        <?php 
        //linking to Game.php
        require 'Game.php';
       //global
        $position = $_GET['board'];
        //testing using var_dump
        //var_dump($position);
         //$squares = str_split($position);
         // var_dump($squares);
        $game = new Game($position);
        $game ->display();
          if ($game->winner('x'))
              echo 'You win. Lucky guesses!';
         else if ($game->winner('o'))
             echo 'I win. Muwahaha';
         else
            echo 'No Winner yet, but you are losing.';
         /*
          $game->display();
         $game->ai_pick_move($position);    
         */
        ?>
    </body>
</html>

