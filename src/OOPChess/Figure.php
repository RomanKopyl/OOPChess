<?php

namespace OOPChess;

class Figure implements FigureInterface
{
    private $color;
    private $name;
    private $column;
    private $line;
    //pawn - пешка
    //king, queen, rook - тура, knight - конь, bishop - слон

    public function __construct($color, $column, $line)
    {
        $this->color = $color;
        $this->column = $column;
        $this->line = $line;
    }

    public function getName()
    {
        // return $this->color . get_class($this);
        return 'p';
    }

    public function getPosition()
    {
        return $this->column . $this->line;
    }

    public function setPosition($column, $line)
    {
        $this->column = $column;
        $this->line = $line;
    }

    public function getColumn()
    {
        return $this->column;
    }

    public function getLine()
    {
        return $this->line;
    }
}