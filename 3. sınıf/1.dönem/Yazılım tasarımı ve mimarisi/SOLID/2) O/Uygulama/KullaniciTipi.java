package edu.ktu;

public abstract class KullaniciTipi {

    public static int STANDART = 0;
    public static int PREMIUM = 1;

    public abstract double indirimliTutar(double fiyat);
}
