package edu.ktu;

public class Musteri extends Kullanici {

    public Musteri(String mail, String sifre) {
        setMail(mail);
        setSifre(sifre);
    }

    @Override
    public void urunGoruntule(Urun urun) {
        System.out.println(getMail() + ", " + urun.getIsim() + " inceliyor.");
    }
}
