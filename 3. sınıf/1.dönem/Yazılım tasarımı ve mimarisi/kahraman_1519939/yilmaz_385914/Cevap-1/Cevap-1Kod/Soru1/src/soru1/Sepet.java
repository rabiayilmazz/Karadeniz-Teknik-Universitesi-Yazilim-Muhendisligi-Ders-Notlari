/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package soru1;

import java.util.ArrayList;

/*
ürün ekle fiyatları hesapla al ödemeden
 */

/**
 *
 * @author Rabia
 */
public class Sepet {
    private ArrayList<Urun> urunler;
    private ArrayList<Kullanici> kullanicilar;
    public Sepet() {
        urunler = new ArrayList<Urun>();
        kullanicilar = new ArrayList<Kullanici>(); 
    }
    public void urunEkle(Urun urun) {
        System.out.println(urun.getIsim() + "urun sepete eklendi");
       urunler.add(urun);
    }
    public void urunSil(Urun urun){
        System.out.println(urun.getIsim() + "urun sepetten silindi");
        urunler.remove(urun);
    }
    public double tutar() {
        System.out.println("sepet tutar");
        double tutar = 0;
        for(Urun urun : urunler) {
            tutar += urun.getFiyat();
            System.out.println(urun.getIsim());
        }
        System.out.println(tutar);
        return tutar;
    }
    public int urunAdet() {
        return urunler.size();
    }
    
}
