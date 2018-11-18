<?php

namespace OOPChess;

class Game implements GameInterface
{
    private $board;
    private $whitePown5;

    public function __construct()
    {
        $this->board = new \OOPChess\Board();
        $this->whitePown5 = new \OOPChess\Pawn('white', 'e', 2);
        //add figure on board
        $this->board->setField($this->whitePown5); 
    }

    public function getBoard(): BoardInterface
    {
        return $this->board;
    }

    public function move(Figure $figure, $column, $line)
    {
        //remove old position on board
        $this->board->setField($figure, $figure->getColumn(), $figure->getLine());
        //add new position on board
        $this->board->setField($figure, $column, $line);
        //add position figure
        $figure->setPosition($column, $line);
    }

    public function getWhitePown5()
    {
        return $this->whitePown5;
    }
}