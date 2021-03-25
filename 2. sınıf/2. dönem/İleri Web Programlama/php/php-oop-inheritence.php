<?php

/*
class test {
    protected $adsoyad = 'Tayfun Erbilen';
    public function merhaba()
    {
        return 'merhaba';
    }
}

class test2 extends test {
    public function dunya()
    {
        return 'dünya ' . parent::merhaba();
    }
    public function merhaba()
    {
        return 'nasılsın';
    }
    public function adsoyad()
    {
        return $this->adsoyad;
    }
}

$test2 = new test2;
//echo $test2->merhaba() . ' ' . $test2->dunya();
//echo $test2->adsoyad();

echo $test2->dunya();
*/

/*
class Calisanlar {

    public $maas;
    public $adsoyad;

    public function adsoyad($adsoyad)
    {
        $this->adsoyad = $adsoyad;
    }

    public function maas($maas)
    {
        $this->maas = $maas;
    }

    public function senelikMaas()
    {
        return ($this->maas * 12) . '₺';
    }

}

class Muhasebeci extends Calisanlar {}
class IT extends Calisanlar {
    public function senelikMaas()
    {
        return 'IT Çalışanımız ' . $this->adsoyad . ' senelik maaş olarak ' . parent::senelikMaas() . ' almaktadır.';
    }
}

$muhasebeci = new Muhasebeci;
$muhasebeci->adsoyad('Ahmet Alkan');
$muhasebeci->maas(2500);
echo 'Muhasebeci Senelik Maaşı: ' . $muhasebeci->senelikMaas() . PHP_EOL;

$it = new IT;
$it->adsoyad('Tayfun Erbilen');
$it->maas(7000);
echo $it->senelikMaas()
*/

class a {
    public function test()
    {
        return 'a:test';
    }
}

class b extends a {
    public function test()
    {
        return 'b:test';
    }
}

class c extends b {
    public function test()
    {
        return 'c:test';
    }
    public function testMetodlariniGetir()
    {
        return [
            'c' => self::test(),
            'b' => parent::test(),
            'a' => a::test()
        ];
    }
}

$c = new c;

print_r($c->testMetodlariniGetir());

?>