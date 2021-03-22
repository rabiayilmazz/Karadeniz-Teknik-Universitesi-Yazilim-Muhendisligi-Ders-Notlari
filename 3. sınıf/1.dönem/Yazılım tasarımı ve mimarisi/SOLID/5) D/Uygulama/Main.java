package edu.ktu;

public class Main {

    public static void main(String[] args) {

        Kullanici kullanici = new Kullanici("Sefa Aras", "sefaaras@ktu.edu.tr", "0", "192.1.1.1");
        Haber haber = new Haber();

        haber.bilgilendir(kullanici, "Deneme Mesaj");

    }
}
