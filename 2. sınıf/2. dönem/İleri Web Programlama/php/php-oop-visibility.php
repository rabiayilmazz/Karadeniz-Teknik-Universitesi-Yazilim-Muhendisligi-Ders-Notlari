<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

// public
// private
// protected

class Test {

    public $a = 'b';
    private $b = 'c';
    protected $c = 'd';

    public function returnB()
    {
        return $this->b;
    }

    private function returnC()
    {
        return $this->c;
    }

    protected function returnA()
    {
        return $this->c;
    }

}

$test = new Test;

//echo $test->returnA();

?>