<?php

class Triangle{

  public $a;
  public $b;
  public $c;

  function __construct ($a, $b, $c) {
    $this->a = $a;
    $this->b = $b;
    $this->c = $c;
  }

  function triangle () {
    if(($this->a>=$this->b+$this->c) || ($this->b>=$this->a+$this->c) || ($this->c >= $this->b +$this->a)){
      echo "That is not a triangle!!!! Try again Dummy!!!";
    } elseif (($this->a==$this->b) && ($this->c==$this->b) && ($this->a == $this->c)) {
      echo "That is an equilateral triangle!";
    } elseif (($this->a==$this->b) || ($this->a==$this->c) || ($this->b==$this->c)) {
      echo "That is an isosceles triangle!";
    } else {
      echo "That is a scalene triangle!!";
    }
  }

}
?>
