<?php

class Person
{
    public function __construct(
        protected string $name = '',
        protected int $age = 42
    ) {}

    public function whoAmI()
    {
        echo $this->name;
    }
}
