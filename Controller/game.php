<?php

class Game
{
    public $team;

    public function __construct(Team $team)
    {
        $this->team = $team;
    }

    public function presentDefenderTeam($team)
    {
        if ($this->team->isTeamStillHasCharacters()) {

            echo "<div class='text-xl text-blue-700 mb-2'>Defender team</div>";

            foreach ($team->characters as $character) {
                echo $character->name . " has " . $character->life . " hp";
                echo "</br>";
            }
        } else {
            echo "<div class='text-2xl text-blue-700 my-5'>All bees area dead, you won!</div>";
        }
    }

    public function attack()
    {
        $character = $this->team->getRandomCharacter();

        if ($character->type == "Queen") {
            $character->life = $character->life - 8;
            echo "<div class='text-xl text-blue-700'>$character->name was hit with 8 damage</div>";
            echo "</br>";
            echo "</br>";

        } elseif ($character->type == "Worker") {
            $character->life = $character->life - 10;
            echo "<div class='text-xl text-blue-700'>$character->name was hit with 10 damage</div>";
            echo "</br>";
            echo "</br>";

        } elseif ($character->type == "Drone") {
            $character->life = $character->life - 12;
            echo "<div class='text-xl text-blue-700 '>$character->name was hit with 12 damage</div>";
            echo "</br>";
            echo "</br>";
        }

        if ($character->isDead($character))
        {
            $this->team->removeCharacter($character);
        }
    }

    public function startFight()
    {
        for ($i=1; ; $i++) {
            $hiddenClass = $i;
            if($i == 1) {
                    $hiddenClass = '';
                } else {
                    $hiddenClass = 'none';
                }
            echo "<div class='round' style='display:{$hiddenClass}'>";

            if ($this->team->isTeamStillHasCharacters()) {
                if ($this->team->isQueenDead()) {
                    echo "<div class='text-2xl text-blue-700 my-5'>Queen is dead, you won!</div>";
                    break;
                }
                echo "<div class='text-2xl text-blue-700 my-5'>===== Starting round {$i} =====</div>";

                $this->attack();

                $this->presentDefenderTeam($this->team);
            } else {
                break;
            }
            echo "</div>";
        }
    }
}