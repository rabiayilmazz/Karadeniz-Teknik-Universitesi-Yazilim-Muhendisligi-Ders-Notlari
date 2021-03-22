package edu.ktu;

public class Main {

    public static void main(String[] args) {

        Musteri musteri = new Musteri("sefaaras@ktu.edu.tr", "123456");
        Satici satici = new Satici("mhbozkurt@ktu.edu.tr", "654321");
        musteri.getVeritabani().kullaniciEkle();

        if(musteri.girisYap("sefaaras@ktu.edu.tr", "123456")) {
            System.out.println("Sisteme giriş yapıldı.");
        }

        Urun urun = new Urun("Bilgisayar", 7500);
        satici.urunEkle(urun);

        musteri.urunGoruntule(urun);
    }
}
