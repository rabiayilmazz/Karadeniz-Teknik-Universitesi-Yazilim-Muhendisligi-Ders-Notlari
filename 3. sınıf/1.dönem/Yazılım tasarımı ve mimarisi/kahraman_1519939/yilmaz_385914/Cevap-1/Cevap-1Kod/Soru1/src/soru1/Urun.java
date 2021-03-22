/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package soru1;

/**
 *
 * @author Rabia
 */
public class Urun {
    private String isim;
    private double fiyat;
    
    public Urun() { }
    public Urun(Kullanici kullanici, String isim, double fiyat) {
        this.isim = isim;
        this.fiyat = fiyat;
    }
    
    public String getIsim() {
        return isim;
    }

    public void setIsim(String isim) {
        this.isim = isim;
    }

    public double getFiyat() {
        return fiyat;
    }

    public void setFiyat(double fiyat) {
        this.fiyat = fiyat;
    }
    
}
