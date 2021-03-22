package soru1;
/**
 *
 * @author Rabia
 */
public class Soru1 {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        Veritabani veritabani = new  Veritabani();
        Giris giris = new Giris();
        Odeme odeme = new Odeme();
        Sepet sepet = new Sepet();
   
        Satici satici = new Satici("Aras", "sefaaras@ktu.edu.tr", "123456","Firma Adres");
        Musteri musteri = new Musteri("Hakan Bozkurt","hakanbozkurt@ktu.edu.tr", "654321", "Ev Adres");
        
        veritabani.kullaniciEkle(satici);
        veritabani.kullaniciEkle(musteri);
                 
        if(giris.girisKontrol("sefa@ktu.edu.tr", "123456")) {
            System.out.println("Giriş Başarılı");
        } else { System.out.println("Giriş Başarısız"); }
        if(giris.girisKontrol("hakanbozkurt@ktu.edu.tr", "654321")) {
            System.out.println("Giriş Başarılı");
        } else { System.out.println("Giriş Başarısız"); }
        
        Urun bilgisayar = new Urun(satici, "Bilgisayar", 7500.0);
        Urun telefon = new Urun(satici, "Telefon", 5000.0);
        Urun tablet = new Urun(satici, "Tablet", 2500.0);
        
        satici.urunEkle(bilgisayar);
        satici.urunEkle(telefon);
        satici.urunEkle(tablet);

        satici.urunGoruntule(bilgisayar);
        musteri.urunGoruntule(telefon);
        
        musteri.urunEkle(tablet);
        musteri.urunEkle(bilgisayar);
        musteri.urunSil(tablet);
        musteri.urunEkle(telefon);
        musteri.urunEkle(bilgisayar);
        musteri.urunSil(tablet);
        odeme.urunEkle(tablet);
        veritabani.odemeEkle(musteri,odeme);
        
}
}