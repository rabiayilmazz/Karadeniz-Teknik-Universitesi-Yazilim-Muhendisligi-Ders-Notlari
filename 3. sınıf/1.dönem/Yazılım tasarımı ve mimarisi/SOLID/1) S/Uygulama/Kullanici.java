package edu.ktu;

public class Kullanici {

    private String isim;
    private String mail;
    private Adres adres;

    public void setIsim(String isim) {
        this.isim = isim;
    }
    public String getIsim() {
        return isim;
    }

    public String getMail() {
        return mail;
    }

    public void setMail(String mail) {
        this.mail = mail;
    }

    public void adresGuncelle(Adres adres) {
        this.adres = adres;
    }

    public String getAdres() {
        return adres.toString();
    }

    public String toString() {
        return getIsim() + " " + getMail() + " " + getAdres();
    }

    public void girisYap(String mail, String sifre) {
        System.out.println("Giriş yapıldı.");
    }
/*
    public void adresGuncelle(String ulke, String il, String ilce) {
        adres = ulke + " " + il + " " + ilce;
    }
 */
}
