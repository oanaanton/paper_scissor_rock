<?php
require(__DIR__ .'\..\Classes\Player.php');
use PHPUnit\Framework\TestCase;

class PlayerTest extends TestCase{
    public function testFailureAttribute(){
        $this->assertClassHasAttribute('identifier', Player::class);
    }

    /**
     * @dataProvider additionProvider
     */
    public function testFailureFunction($playerIdentifier){

        $player = new Player($playerIdentifier);
        $this->assertContains($player->Strategy(), ['paper', 'scissor', 'rock' ]);


    }

    public function additionProvider()
    {
        return [
            [ "A" ],
            [ "B" ]
        ];
    }

}




?>