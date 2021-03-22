package edu.ktu;

public class Giris {
    public boolean kontrol(Kullanici kullanici, String sifre) {
        return kullanici.getSifre().equals(sifre);
    }
}
