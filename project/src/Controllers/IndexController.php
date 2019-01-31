<?php

namespace App\Controllers;

require_once("../../autoloader.php");

use \App\Models\GumBall;

$game = new GumBall();

$game->setBalls(8);

$game->displayState();

$game->turnWheel();

$game->displayState();