package edu.ktu;

public class Kullanici {

    private String mail;
    private String sifre;
    private String isim;
    private KullaniciTipi tip;

    public String getMail() {
        return mail;
    }

    public void setMail(String mail) {
        this.mail = mail;
    }

    public String getSifre() {
        return sifre;
    }

    public void setSifre(String sifre) {
        this.sifre = sifre;
    }

    public String getIsim() {
        return isim;
    }

    public void setIsim(String isim) {
        this.isim = isim;
    }

    public KullaniciTipi getTip() {
        return tip;
    }

    public void setTip(KullaniciTipi tip) {
        this.tip = tip;
    }
}
