<?php

namespace OOPChess;

class Board implements BoardInterface
{
    private $field;
    private $column;
    private $line;
    // private define('COLUMN', ['a', 'b']);

    public function __construct()
    {
        //переделать через циклі for ($i = 1; $i < 8; $i++)
        $this->field = [
            // 'a' => [1 => '', 2 => '', 3 => '', 4 => '', 5 => '', 6 => '', 7 => '', 8 => ''],
            'a' => [1 => '', 2 => '', 3 => '', 4 => '', 5 => '', 6 => '', 7 => '', 8 => ''],
            'b' => [1 => '', 2 => '', 3 => '', 4 => '', 5 => '', 6 => '', 7 => '', 8 => ''],
            'c' => [1 => '', 2 => '', 3 => '', 4 => '', 5 => '', 6 => '', 7 => '', 8 => ''],
            'd' => [1 => '', 2 => '', 3 => '', 4 => '', 5 => '', 6 => '', 7 => '', 8 => ''],
            'e' => [1 => '', 2 => '', 3 => '', 4 => '', 5 => '', 6 => '', 7 => '', 8 => ''],
            'f' => [1 => '', 2 => '', 3 => '', 4 => '', 5 => '', 6 => '', 7 => '', 8 => ''],
            'g' => [1 => '', 2 => '', 3 => '', 4 => '', 5 => '', 6 => '', 7 => '', 8 => ''],
            'h' => [1 => '', 2 => '', 3 => '', 4 => '', 5 => '', 6 => '', 7 => '', 8 => '']
        ];
    }

    public function show() 
    {
        $countLine = 8;
        foreach ($this->field as $column => $line) {
            echo $countLine-- . '|';
            
            foreach ($line as $key => $value) {
                if ($value === '') {
                    echo $value . ' |';
                } else {
                    echo $value . '|';
                }
            }
            echo PHP_EOL;
        }
        echo '  a b c d e f g h ';
    }

    public function setField(Figure $figure)
    {
        $column = $figure->getColumn();
        $line = $figure->getLine();

        foreach ($this->field as $key => $value) {
            // echo $key;
            if ($key === $column) {
                foreach ($value as $key2 => $value2) {
                    // echo $key2;
                    if ($key2 === $line) {
                        $value2 = 't'; //$figure->getName();
                    }
                }
            }
        }
    }
}