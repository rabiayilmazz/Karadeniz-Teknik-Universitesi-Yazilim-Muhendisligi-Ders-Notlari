package edu.ktu;

import java.util.ArrayList;

public class Toplayici {

    public double alanToplayici(ArrayList<AlanHesap> sekiller) {
        double toplam = 0;
        for(AlanHesap sekil : sekiller) {
            toplam += sekil.alanHesapla();
        }
        return toplam;
    }

    public double cevreToplayici(ArrayList<CevreHesap> sekiller) {
        double toplam = 0;
        for(CevreHesap sekil : sekiller) {
            toplam += sekil.cevreHesapla();
        }
        return toplam;
    }
}
