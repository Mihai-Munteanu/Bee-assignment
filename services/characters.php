<?php

class Team
{
    public $name;
    public $characters;

    public function __construct($name, $characters)
    {
        $this->name = $name;
        $this->characters = $characters;
    }

    public function getRandomCharacter()
    {
        return $this->characters[array_rand($this->characters)];
    }

    public function isQueenDead()
    {
        foreach ($this->characters as $character) {

            if ($character->type == "Queen" && $character->life <= 0) {
                return "true";
            } else {
                return false;
            }
        }
    }

    public function removeCharacter($character)
    {

        if (($key = array_search($character, $this->characters)) !== false) {
            unset($this->characters[$key]);
        }
    }

    public function isTeamStillHasCharacters():bool
    {
        return isset($this->characters) && count($this->characters) > 0;
    }
}

class Character
{
    public $name;
    public $type;
    public $life;

    public function __construct($name, $type, $life)
    {
        $this->name = $name;
        $this->type = $type;
        $this->life = $life;
    }
    public function isDead($character)
    {
        if ($character->life <= 0 && $character->type != "Queen") {
            return true;
        } else {
            return false;
        };
    }
}