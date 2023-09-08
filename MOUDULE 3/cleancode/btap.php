<?php
class TennisGame
{
    public string $score = '';
    public string $playerOneName;
    public string $playerTwoName;
    public int $playerOneScore;
    public int $playerTwoScore;

    public function __construct($playerOneName, $playerTwoName, $playerOneScore, $playerTwoScore)
    {
        $this->playerOneName = $playerOneName;
        $this->playerTwoName = $playerTwoName;
        $this->playerOneScore = $playerOneScore;
        $this->playerTwoScore = $playerTwoScore;
    }

    public function calculateEqualScore()
    {
        switch ($this->playerOneScore) {
            case 0:
                $this->score = "Love-All";
                break;
            case 1:
                $this->score = "Fifteen-All";
                break;
            case 2:
                $this->score = "Thirty-All";
                break;
            case 3:
                $this->score = "Forty-All";
                break;
            default:
                $this->score = "Deuce";
                break;
        }
        return $this->score;
    }

    public function scoreMoreThanFour()
    {
        $minusResult = $this->playerOneScore - $this->playerTwoScore;
        if ($minusResult == 1) {
            $this->score = "Advantage " . $this->playerOneName;
        } else if ($minusResult == -1) {
            $this->score = "Advantage " . $this->playerTwoName;
        } else if ($minusResult >= 2) {
            $this->score = "Win for " . $this->playerOneName;
        } else {
            $this->score = "Win for " . $this->playerTwoName;
        }

        return $this->score;
    }

    public function calculateLessThanFour()
    {
        for ($i = 1; $i < 3; $i++) {
            if ($i == 1) {
                $tempScore = $this->playerOneScore;
            } else {
                $this->score .= "-";
                $tempScore = $this->playerTwoScore;
            }
            switch ($tempScore) {
                case 0:
                    $this->score .= "Love";
                    break;
                case 1:
                    $this->score .= "Fifteen";
                    break;
                case 2:
                    $this->score .= "Thirty";
                    break;
                case 3:
                    $this->score .= "Forty";
                    break;
            }
        }
        return $this->score;
    }

    public function getScore()
   {
        if ($this->playerOneScore == $this->playerTwoScore) {
            return $this->calculateEqualScore();
        } else if ($this->playerOneScore >= 4 || $this->playerTwoScore >= 4) {
            return $this->scoreMoreThanFour();
        } else {
            return $this->calculateLessThanFour();
        }
    }
}

$tennisGame = new TennisGame('Tam', 'Bao', 4, 1);

echo $tennisGame->getScore() . '<br>';
echo $tennisGame->playerOneName . '-' . $tennisGame->playerTwoName;