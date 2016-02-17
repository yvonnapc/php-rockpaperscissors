<?php

    require_once "src/RockPaperScissors.php";

    class RockPaperScissorsTest extends PHPUnit_Framework_TestCase
    {

        function test_rock_scissors()
        {
            //Arrange
            $test_RockPaperScissors = new RockPaperScissors;
            $first_input = "rock";
            $second_input = "scissors";

            //Act
            $result = $test_RockPaperScissors->playGame($first_input, $second_input);

            //Assert
            $this->assertEquals("Player 1", $result);
        }
        function test_rock_paper()
        {

            $test_RockPaperScissors = new RockPaperScissors;
            $first_input = "rock";
            $second_input = "paper";

            $result = $test_RockPaperScissors->playGame($first_input, $second_input);

            $this->assertEquals("Player 1", $result);
        }
        function test_rock_rock()
        {

              $test_RockPaperScissors = new RockPaperScissors;
              $first_input = "rock";
              $second_input = "rock";

              $result = $test_RockPaperScissors->playGame($first_input, $second_input);

              $this->assertEquals("Draw", $result);
        }
    }

?>
