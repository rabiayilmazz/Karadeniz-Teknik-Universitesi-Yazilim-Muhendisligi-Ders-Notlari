package edu.ktu;

public class PremiumUyelik extends KullaniciTipi {

    @Override
    public double indirimliTutar(double fiyat, int adet) {
        return fiyat * 0.9;
    }
}
