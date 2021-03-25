<?php

/*
class Marka {

}
class Model extends Marka {

}
final class Seri extends Model {

}
class Urun extends Seri {
    public function test()
    {
        return 'ürün';
    }
}

$urun = new Urun;
echo $urun->test();
*/

class Calisanlar {
    final public function test()
    {
        return 'calisanlar:test';
    }
}

class Muhasebeci extends Calisanlar {
    public function test()
    {
        return 'muhasebeci:test';
    }
}

$muhasebeci = new Muhasebeci;
echo $muhasebeci->test();

?>