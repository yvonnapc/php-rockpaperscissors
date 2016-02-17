<?php
    class RockPaperScissors
    {
      private $player1;
      private $player2;

      function __construct($player1, $player2){
        $this->player1 = $player1;
        $this->player2 = $player2;
      }
      function getPLayerOne()
      {
        return $player1;
      }
      function setPlayerOne($move)
      {
        $this->player1 = $move
      }
      function getPlayer2()
      {
        return $player2;
      }
      function setPLayer2($move)
      {
        $this->player2 = $move
      }
      function playGame()
      {
        if ($this->getPlayer1 == "rock" && $this->getPlayer2 == "scissors"|| $this->getPLayer1 === "paper" && $this->getPlayer1 === "rock" || $this->getPlayer1 == "")
        return $result;
      }
    }

 ?>
