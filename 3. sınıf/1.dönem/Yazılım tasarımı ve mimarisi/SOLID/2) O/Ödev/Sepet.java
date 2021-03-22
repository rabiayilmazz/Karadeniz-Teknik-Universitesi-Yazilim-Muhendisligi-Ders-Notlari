package edu.ktu;

import java.util.ArrayList;

public class Sepet {

    private ArrayList<Urun> urunler;
    public Sepet() {
        urunler = new ArrayList<Urun>();
    }
    public void urunEkle(Urun urun) {
        urunler.add(urun);
    }
    public double tutar() {
        double tutar = 0;
        for(Urun urun : urunler) {
            tutar += urun.getFiyat();
        }
        return tutar;
    }
    public int urunAdet() {
        return urunler.size();
    }
}
