<?php
class Calculadora
{
    private $num1;
    private $num2;

    public function __construct($a1, $a2)
    {
        $this->num1 = $a1;
        $this->num2 = $a2;
    }

    public function suma()
    {

        return $this->num1 + $this->num2;
    }

    public function diff()
    {
        if ($this->num2 > $this->num1) {
            $temp = $this->num1;
            $this->num1 = $this->num2;
            $this->num2 = $temp;
        }

        return $this->num1 - $this->num2;
    }

    public function mult()
    {
        return $this->num1 * $this->num2;
    }

    public function div()
    {
        return $this->num1 / $this->num2;
    }
}
