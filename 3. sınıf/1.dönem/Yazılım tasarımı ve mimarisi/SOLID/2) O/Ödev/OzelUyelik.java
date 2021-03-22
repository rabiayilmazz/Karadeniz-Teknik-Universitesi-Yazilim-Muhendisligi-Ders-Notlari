package edu.ktu;

public class OzelUyelik extends KullaniciTipi  {

    @Override
    public double indirimliTutar(double fiyat, int adet) {
        return fiyat * (1 - adet * 0.05);
    }
}
