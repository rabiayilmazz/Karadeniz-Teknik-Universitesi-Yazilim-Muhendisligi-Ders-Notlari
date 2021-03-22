/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package soru1;

import java.util.ArrayList;

/**
 *
 * @author Rabia
 */
public class Veritabani {
    
    private ArrayList<Kullanici> kullanicilar;
    private ArrayList<Urun> urunler;
    private ArrayList<Odeme> odemeler;
    
    public Veritabani() {
        kullanicilar = new ArrayList<Kullanici>();
        urunler = new ArrayList<Urun>();
        odemeler = new ArrayList<Odeme>();
    }
    
    public void kullaniciEkle(Kullanici kullanici) {
        Kullanici musteri = new Musteri();
        Kullanici satici = new Satici();
        kullanicilar.add(musteri);
        kullanicilar.add(satici);
        System.out.println(kullanici.getIsim() + " kullanici veritabanına eklendi");
    }
    public String getSifreKontrol(String mail) {
        for(Kullanici kullanici : kullanicilar) {
            if(kullanici.getMail().equals(mail))
                return kullanici.getSifre();
        }
        return "";
    }
    public void urunEkle(Urun urun) {
        urunler.add(urun);
        System.out.println(urun.getIsim() + " urun veritabanına eklendi");
    }
    public void urunSil(Urun urun){
        urunler.remove(urun);
        System.out.println(urun.getFiyat() + " veritabanından silindi");
    }
    public void odemeEkle(Kullanici kullanici, Odeme odeme) {
        odemeler.add(odeme);
        System.out.println(kullanici.getMail()+ "'in " + odeme.tutar() + "TL'lik odemesi veritabanına eklendi");
    }
}
