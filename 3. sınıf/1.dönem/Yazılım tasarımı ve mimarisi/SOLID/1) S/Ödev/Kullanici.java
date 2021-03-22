package edu.ktu;

public class Kullanici {
    private String isim;
    private String mail;
    private Adres adres;
    private String sifre;
    public void setIsim(String isim) { this.isim = isim; }
    public String getIsim() { return isim; }
    public String getMail() { return mail; }
    public void setMail(String mail) { this.mail = mail; }
    public void setSifre(String sifre) { this.sifre = sifre; }
    public String getSifre() { return sifre; }
    public void adresGuncelle(Adres adres) { this.adres = adres; }
    public String getAdres() { return adres.toString(); }
    public String toString() {
        return getIsim() + " " + getMail() + " " + getAdres();
    }
}
