<?php

namespace App;

class Rectangle extends Figure implements Carre
{
   public function __construct($length, $width)
   {
      $this->length = $length;
      $this->width = $width;
   }
   public float $width;
   public float $length;

   public function perimeter()
   {
      return ($this->width + $this->length) * 2;
   }
}
