<?php

namespace DesignPatterns\Creational\AbstractFactory;

class HtmlText extends Text
{
    // do something here
    public function view(){
        echo $this->text;
    }
}
