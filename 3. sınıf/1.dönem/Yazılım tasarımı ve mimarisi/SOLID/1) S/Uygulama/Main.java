package edu.ktu;

public class Main {

    public static void main(String[] args) {

        Kullanici kullanici = new Kullanici();
        kullanici.setIsim("Sefa Aras");
        kullanici.setMail("sefaaras@ktu.edu.tr");

        Adres adres = new Adres();
        adres.setUlke("Turkiye");
        adres.setIl("Trabzon");
        adres.setIlce("Of");

        kullanici.adresGuncelle(adres);

        System.out.println(kullanici.toString());

        adres.setPostKodu(61000);
        kullanici.adresGuncelle(adres);

        System.out.println(kullanici.toString());

    }
}
