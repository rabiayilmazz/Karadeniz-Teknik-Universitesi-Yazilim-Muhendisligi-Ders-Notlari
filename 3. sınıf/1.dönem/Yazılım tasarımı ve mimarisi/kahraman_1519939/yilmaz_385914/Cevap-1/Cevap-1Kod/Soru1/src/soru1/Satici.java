/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/*
satıcı firma adı, mail, şifre, firma adresi
 */
package soru1;

/**
 *
 * @author Rabia
 */
public class Satici extends Kullanici{
    
    Veritabani veritabani = new Veritabani();
    public Satici(){}
    
    public Satici(String firmaIsim, String mail, String sifre, String firmaAdres){
        setIsim(firmaIsim);
        setMail(mail);
        setSifre(sifre);
        setAdres(firmaAdres);
    }

    @Override
    public void urunGoruntule(Urun urun) {
        System.out.println(getMail() + ", " + urun.getIsim() + ", " + urun.getFiyat() + " inceliyor.");
    }

    @Override
    public void urunEkle(Urun urun) {
        veritabani.urunEkle(urun);
    }

    @Override
    public void urunSil(Urun urun) {
        veritabani.urunSil(urun);
    }
    
}
