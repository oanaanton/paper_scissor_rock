<?php
require(__DIR__ .'\..\Classes\Game.php');
require(__DIR__ .'\..\Classes\Player.php');

use PHPUnit\Framework\TestCase;

class GameTest extends TestCase{
    public function testFailureRound()
    {
        $playerA = new Player("A");
        $playerB = new Player("B");
        $game = new Game();
        $this->assertContains($game->Round($playerA, $playerB), ["A", "B", "tie"]);
    }

    /**
     * @dataProvider additionProvider
     */
    public function testFailureGetScore($win, $count)
    {
        $this->assertIsNumeric($win);
        $this->assertGreaterThanOrEqual(0, $win);
        $this->assertLessThanOrEqual($count, $win);
    }
    public function additionProvider()
    {
        $game = new Game();
        $score = $game->getScore();

        $winsA = $score->winsA;
        $winsB = $score->winsB;
        $tie = $score->tie;
        $count = $score->count;

        return [
            [ $winsA, $count ],
            [ $winsB, $count ],
            [ $tie, $count ]
        ];
    }

    /**
     * @dataProvider additionProviderSum
     */
    public function testFailureSum($winsA, $winsB, $tie, $count){

        $sum = $winsA + $winsB + $tie;
        $this->assertEquals($count, $sum);
    }
    public function additionProviderSum()
    {
        $game = new Game();
        $score = $game->getScore();

        $winsA = $score->winsA;
        $winsB = $score->winsB;
        $tie = $score->tie;
        $count = $score->count;

        return [
            [ $winsA, $winsB, $tie, $count ]
        ];
    }

}




?>