<?php

echo "Lets understand oops using pubg and GTA <br>";

class player{
    //properties
  public $name;
  public $speed=5;
  public $running;
//   method
function set_name($name){
    $this->name = $name;
}
function get_name(){
    return $this->name;
}
function run(){
    $this->running=true;
}
function stopRun(){
    $this->running=false;
}
}
$player1=new player();
$player1->set_name("Hassan");
echo $player1->get_name(); 
echo $player1->speed;
echo "<br>";
$player2=new player();
$player2->set_name("Husnain");
echo $player2->get_name(); 
echo $player2->speed;
echo "<br>";
$player3=new player();
$player3->set_name("Adeel");
echo $player3->get_name(); 
echo $player3->speed;
echo "<br>";
