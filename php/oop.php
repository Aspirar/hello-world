<?php

declare(strict_types=1);

class StringObject
{
    private $string;

    public function __construct(string $string)
    {
        $this->string = $string;
    }

    public function append(string $string): self
    {
        return new self($this->string . $string);
    }

    public function __toString()
    {
        return $this->string;
    }
}

$hello = new StringObject("Hello");
$helloWorld = $hello->append(" World");

echo $helloWorld;

