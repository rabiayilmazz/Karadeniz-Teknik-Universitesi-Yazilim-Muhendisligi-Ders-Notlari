package edu.ktu;

import java.util.ArrayList;

public class Main {

    public static void main(String[] args) {

        Toplayici toplayici = new Toplayici();
        Kare kare1 = new Kare();
        kare1.setKenar(4);
        Kare kare2 = new Kare(5);
        Dikdortgen dikdortgen = new Dikdortgen(4, 6);
        Cember cember = new Cember(7);

        ArrayList<CevreHesap> cevreHesapArrayList = new ArrayList<>();
        ArrayList<AlanHesap> alanHesapArrayList = new ArrayList<>();

        cevreHesapArrayList.add(kare1);
        cevreHesapArrayList.add(dikdortgen);
        cevreHesapArrayList.add(cember);

        alanHesapArrayList.add(kare2);
        alanHesapArrayList.add(dikdortgen);

        System.out.println(toplayici.alanToplayici(alanHesapArrayList));
        System.out.println(toplayici.cevreToplayici(cevreHesapArrayList));

    }
}
