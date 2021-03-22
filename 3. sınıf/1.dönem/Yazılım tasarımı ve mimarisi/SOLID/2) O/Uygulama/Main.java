package edu.ktu;

public class Main {

    public static void main(String[] args) {

        Odeme odeme = new Odeme();
        Urun ceptelefonu = new Urun("Cep Telefonu", 5000);
        Urun bilgisayar = new Urun("Bilgisayar", 7000);
        Sepet sepet = new Sepet();
        StandartUyelik standartUyelik = new StandartUyelik();
        PremiumUyelik premiumUyelik = new PremiumUyelik();

        Kullanici kullanici = new Kullanici();
        kullanici.setIsim("Sefa Aras");
        kullanici.setMail("sefaaras@ktu.edu.tr");
        kullanici.setSifre("123456");
        kullanici.setTip(premiumUyelik);

        sepet.urunEkle(ceptelefonu);
        sepet.urunEkle(bilgisayar);

        System.out.println(odeme.fiyatHesapla(kullanici, sepet));

    }
}
