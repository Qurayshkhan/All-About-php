<?php

class Player{
    public $name;
    public $speed=5;

    function set_name($name){
        $this->name=$name;
    }
    function get_name(){
        return $this->name;
    }
}
$player=new player();
$player->set_name(" Hassan ");
echo $player->get_name();
echo $player->speed;

?>