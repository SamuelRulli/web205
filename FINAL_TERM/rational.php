<?php
    class Rational
    {

        private $numerator;
        private $denominator;

        function __construct(int $p, $q)
        {
            $this->numerator   = $p;
            $this->denominator = $q;
        }

        function add($param){

            print_r($param['numerator']);

            return new Rational($param,$param);
        }

        public function getNumerator(): int
        {
            return $this->numerator;
        }

        public function getDenominator(): int
        {
            return $this->denominator;
        }

    }
?>