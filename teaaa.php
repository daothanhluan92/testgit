<?php
class ahasbchj
{
    public $a;
    public function __construct($b)
    {
        $this->a = $b;
    }
    public function get()
    {
        echo $this->a;
    }
}
(new ahasbchj(1))->get();