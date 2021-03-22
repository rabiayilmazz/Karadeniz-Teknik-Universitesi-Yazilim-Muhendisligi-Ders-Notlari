package edu.ktu;

public class Main {

    public static void main(String[] args) {

        Veritabani veritabani = new Veritabani();
        Musteri musteri = new Musteri("sefaaras@ktu.edu.tr", "123456");
        Satici satici = new Satici("mhbozkurt@ktu.edu.tr", "654321", veritabani);
        GirisYap girisYap = new GirisYap(veritabani);
        veritabani.kullaniciEkle();

        if(girisYap.girisYap("sefaaras@ktu.edu.tr", "123456")) {
            System.out.println("Sisteme giriş yapıldı.");
        }

        Urun urun = new Urun("Bilgisayar", 7500);
        satici.urunEkle(urun);

        musteri.urunGoruntule(urun);

    }
}
