package edu.ktu;

public class Odeme {

    public double fiyatHesapla(Kullanici kullanici, Sepet sepet) {
        return kullanici.getTip().indirimliTutar(sepet.tutar());
    }
}
