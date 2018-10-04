<?php
class OOP{
    private $string;
    public function setString($string){
        $this->string = $string;
        return $this;
    }
    public function getString(){
        return $this->string;
    }
}
$c = new OOP;
echo $c->setString("Hello World")
  ->getString();