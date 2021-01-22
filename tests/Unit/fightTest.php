<?php

require('./services/characters.php');
require('./Controller/game.php');

it ("returns true when we have 3 characters", function () {

    $beeTeam = new Team( 'BeeSwarm',
    [
        new Character('Queen_1', 'Queen', 100),
        new Character('Worker_1', 'Worker', 70),
        new Character('Drone_1', 'Drone', 50),
    ]
    );

    $this->assertCount(3, $beeTeam->characters);
});

it ("character life after attach is decreasing", function () {

    $beeCharacter_1 = new Character('Drone_1', 'Drone', 50);
    $beeCharacter_2 = new Character('Drone_1', 'Drone', 50);

    $beeTeam = new Team( 'BeeSwarm', [$beeCharacter_1, $beeCharacter_2]);

    $game = new Game($beeTeam);

    $lifeBeforeAttack = $beeCharacter_1->life;

    $game->startFight();

    $lifeAfterAttack = $beeCharacter_1->life;

    $this->assertTrue($lifeAfterAttack < $lifeBeforeAttack);


});

it ("after the attack all characters are dead", function () {

    $beeTeam = new Team('BeeSwarm',
    [
        new Character('Worker_1', 'Worker', 70),
        new Character('Worker_2', 'Worker', 70),
        new Character('Drone_1', 'Drone', 50),
    ]
    );

    $game = new Game($beeTeam);
    $game->startFight();

    $this->assertCount(0, $beeTeam->characters);
});


it ("if the queen is dead the game is over and all the characters are in the array", function () {

    $beeTeam = new Team('BeeSwarm',
    [
        new Character('Queen_1', 'Queen', 1),
        new Character('Worker_2', 'Worker', 70),
        new Character('Drone_1', 'Drone', 50),
    ]
    );

    $game = new Game($beeTeam);
    $game->startFight();


    $this->assertCount(3, $beeTeam->characters);
});