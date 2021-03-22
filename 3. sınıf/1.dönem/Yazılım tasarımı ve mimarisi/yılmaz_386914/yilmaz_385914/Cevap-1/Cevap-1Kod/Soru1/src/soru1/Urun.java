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
    private int fiyat;
    

    public Urun(String isim, int fiyat) {
        this.isim = isim;
        this.fiyat = fiyat;
    }

    public String getIsim() {
        return isim;
    }

    public void setIsim(String isim) {
        this.isim = isim;
    }

    public int getFiyat() {
        return fiyat;
    }

    public void setFiyat(int fiyat) {
        this.fiyat = fiyat;
    }

    void teklifVer(Kullanici kullanici, int i) {
        if(i > this.fiyat ){
            System.out.println(kullanici.getIsim() + " kullanıcısına fiyat değişimi " + i + " mail olarak bildirildi.");
        }
    }
    
}
