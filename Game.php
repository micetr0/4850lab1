<?php

/*
* lab 1 ACIT4850  
 *William Hu 
 * A00729057
 * 
 */

/**
 * Description of Game
 *Smple game of tic-tat-toe
 * @author w7-Will_lap
 */
class Game {
    //put your code here
    var $position;

function __construct($squares) {
     //var_dump ($squares);

    $this->position = str_split($squares);
    //var_dump($position);
}


function winner($token){
    //horizontal rows
    $won = false;
    if  (($this->position[0]==$token) && ($this->position[1] == $token) && ($this->position[2]==$token))    
    {
    $won = true;
    } 
    else if  (($this->position[3] ==$token) && ($this->position[4] ==$token) && ($this->position[5]==$token))
        {
        $won = true;
        }    
     else if  (($this->position[6] ==$token) && ($this->position[7] ==$token) && ($this->position[8]==$token))
        {
        $won = true;
        }    
        //vertical rows
        else if ( ($this->position[0] ==$token) && ($this->position[3] ==$token) && ($this->position[6]==$token))
        {
        $won = true;
        }    
         else if ( ($this->position[1] ==$token) && ($this->position[4] ==$token) && ($this->position[7]==$token))
        {
        $won = true;
        } 
         else if ( ($this->position[2] ==$token) && ($this->position[5] ==$token) && ($this->position[8]==$token))
        {
        $won = true;
        } 
        //diagional rows
         else if ( ($this->position[0] ==$token) && ($this->position[4] ==$token) && ($this->position[8]==$token))
        {
        $won = true;
        } 
        else if  (($this->position[2] ==$token) && ($this->position[4] ==$token) && ($this->position[6]==$token))
        {
        $won = true;
        }
 return $won;
}

function display() {
    echo '<table cols=”3” style=”font­size:large; font­weight:bold” border=1>';
    echo '<tr>'; // open the first row
    for ($pos=0; $pos<9;$pos++) {
         echo $this->show_cell($pos);
        if ($pos %3 == 2) echo '</tr><tr>'; // start a new ro; for the next square
        }
            echo '</tr>'; // close the last row
            echo '</table>';
            
    }//end display
    
function show_cell($which) {
    $token = $this->position[$which];
    // deal with the easy case
    if ($token <> '­') return '<td>'.$token.'</td>';
// now the hard case
$this->newposition = $this->position; //copy the original
$this->newposition[$which] = 'o'; // this would be their move
$move = implode($this­>newposition); // make a string from the board array
$link = '/?board='.$move; //this is what we want the link to be
// so return a cell containing an anchor and showing a hyphen
return '<td><a href=”'.$link.'”>­</a></td>';
}//end show cell

/*
function ai_pick_move($new_square) {
 
$token = $this->position[$new_square];

$random = rand(0,8);
if ($new_square[$random] == '-') {
$new_square[$random] = 'o';
} else {
$this-> ai_pick_move ($new_square);
}
return $new_square;
		}
*/
}//game class end
        
 
      
 
     

