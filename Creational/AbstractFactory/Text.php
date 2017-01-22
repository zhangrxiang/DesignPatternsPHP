<?php

namespace DesignPatterns\Creational\AbstractFactory;

abstract class Text
{
    /**
     * @var string
     */
    public $text;

    public function __construct(string $text)
    {
        $this->text = $text;
    }
}
