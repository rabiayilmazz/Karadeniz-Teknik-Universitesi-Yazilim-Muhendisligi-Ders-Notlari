/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package soru1;

import java.util.ArrayList;

/*

ürünler dizisi ile fiyat hesaplanacak 

*/
/**
 *
 * @author Rabia
 */
public class Odeme {
    ArrayList<Urun> urunler;
    Veritabani veritabani = new Veritabani();
    public Odeme(){
        urunler = new ArrayList<Urun>();
    }
    public void urunEkle(Urun urun) { 
        urunler.add(urun);
        System.out.println("odemeye urun eklendi");
    }
    public double tutar() {
        double tutar = 0;
        for(Urun urun : urunler) {
            tutar += urun.getFiyat();
        }
        return tutar;
    }
    
}
