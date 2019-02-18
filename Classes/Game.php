<?php

class Game{

    private $count = 100;

    public function Round(Player $playerA, Player $playerB){
        $strategyA = $playerA->Strategy();
        $strategyB = $playerB->Strategy();

        $wins = [ "scissors" => "paper",
                  "rock" => "scissors",
                  "paper" => "rock" ];

        if($strategyA == $strategyB)
            return 'tie';
        else if($wins[$strategyA] == $strategyB)
            return "A";
        else
            return "B";
    }

    public function getScore(){

        $playerA = new Player("A");
        $playerB = new Player("B");

        for($i = 0; $i<$this->count; $i++){
            $wins[$i] = $this->Round($playerA, $playerB);
        }


        $winners = array_count_values($wins);
        if($winners['A']==$winners['B'])
            $message = "It's a tie!";
        elseif($winners['A']>$winners['B'])
            $message =  "Winner is: Player A (".$winners['A']." to ".$winners['B']." wins)";
        else
            $message =  "Winner is: Player B (".$winners['B']." to ".$winners['A']." wins)";

        $retval = new Result($winners['A'], $winners['B'], $winners['tie'], $this->count, $message);

        return $retval;
    }

}

class Result{
    public $winsA;
    public $winsB;
    public $tie;
    public $count;
    public $message;

    function __construct($winsA, $winsB, $tie, $count, $message){
        $this->winsA = $winsA;
        $this->winsB = $winsB;
        $this->tie = $tie;
        $this->count = $count;
        $this->message = $message;
    }

}

