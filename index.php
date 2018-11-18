<?php

\spl_autoload_register(function ($class) {
    $classFilename = __DIR__ . DIRECTORY_SEPARATOR . 'src' . DIRECTORY_SEPARATOR
        . \str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';
    require $classFilename;
});

$game = new \OOPChess\Game();
// new \OOPChess\Board();// 
$board = $game->getBoard();
$board->show();

$figure1 = $game->getWhitePown5();
$game->move($figure1, 'e', 4);