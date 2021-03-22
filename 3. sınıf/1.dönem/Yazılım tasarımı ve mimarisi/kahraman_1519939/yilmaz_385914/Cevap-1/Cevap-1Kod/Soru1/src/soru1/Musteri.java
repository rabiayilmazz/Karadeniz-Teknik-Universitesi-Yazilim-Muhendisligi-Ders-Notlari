/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/*
kullanıcı isim, mail, şifre, adres 
        ürünü sepetine ekleyip
        ödeme yapabilmektedir 
        ürünleri görüntüleyebilmektedir
 */
package soru1;

/**
 *
 * @author Rabia
 */
public class Musteri extends Kullanici{
    Sepet sepet = new Sepet();
    Odeme odeme = new Odeme();
    public Musteri(){}
    
    public Musteri(String isim, String mail, String sifre, String adres){
        setIsim(isim);
        setMail(mail);
        setSifre(sifre);
        setAdres(adres);
    }

    @Override
    public void urunGoruntule(Urun urun) {
        System.out.println(getMail() + ", maile sahip kullanıcı " + urun.getIsim() + "'ı inceliyor.");
    }

    @Override
    public void urunEkle(Urun urun) {
        sepet.urunEkle(urun); 
    }

    @Override
    public void urunSil(Urun urun) {
        sepet.urunSil(urun);
    }
        
}
