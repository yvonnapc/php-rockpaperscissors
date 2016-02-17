<?php
	 class RockPaperScissors
		{
			private $playerOne;
			private $playerTwo;
			function __construct($playerOne, $playerTwo)
			{
				$this->playerOne = $playerOne;
				$this->playerTwo = $playerTwo;
			}
			function getPlayerOne()
			{
				return $this->playerOne;
			}
			function setPlayerOne($choice)
			{
				$this->playerOne = $choice;
			}
			function getPlayerTwo()
			{
				return $this->playerTwo;
			}
			function setPlayerTwo($choice)
			{
				$this->playerTwo = $choice;
			}
			function playGame ()
			{
				if ($this->getPlayerOne() == "rock" && $this->getPlayerTwo() == "scissors" || $this->getPlayerOne() == "paper" && $this->getPlayerTwo() == "rock" || $this->getPlayerOne() == "scissors" && $this->getPlayerTwo() == "paper")
				{
					return "Winnder: Player 1";
				}
				elseif ($this->getPlayerOne() == $this->getPlayerTwo())
				{
					return "Draw! Play Again";
				}
				else
				{
					return "Winner: Player 2";
				}
			}
	}
 ?>
