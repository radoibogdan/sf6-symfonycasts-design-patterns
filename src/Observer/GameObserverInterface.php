<?php

namespace App\Observer;

use App\FightResult;

interface GameObserverInterface
{
    public function onGameFinished(FightResult $fightResult): void;
}