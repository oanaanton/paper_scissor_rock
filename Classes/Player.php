<?php

class Player{
    public $identifier;

    function __construct($identifier){
        $this->identifier = $identifier;

        if($identifier!='A' && $identifier!='B')
            $this->ConstructFailed();

    }
    private function ConstructFailed()
    {
        throw new Exception('Unable to load user using identifier: ' . $this->identifier);
    }

    public function Strategy(){
        if($this->identifier=='A'){
            return 'paper';
        }
        elseif($this->identifier=='B'){
            $choices = [ 'paper',
                         'scissor',
                         'rock' ];
            $choice = array_rand($choices, 1);
            return $choices[$choice];
        }
    }
}
