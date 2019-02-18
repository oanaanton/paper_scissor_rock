<?php
require_once('../Classes/Player.php');
require_once('../Classes/Game.php');

$game = new Game();
$score = $game->getScore();

echo "Player A wins ".$score->winsA." of ".$score->count." games<br/>";
echo "Player B wins ".$score->winsB." of ".$score->count." games<br/>";
echo "Ties: ".$score->tie." of ".$score->count." games<br/>";
echo $score->message;

?>

