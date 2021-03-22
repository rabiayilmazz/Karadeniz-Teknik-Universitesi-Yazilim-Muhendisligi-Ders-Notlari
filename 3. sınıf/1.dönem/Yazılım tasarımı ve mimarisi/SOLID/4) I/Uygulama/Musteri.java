package edu.ktu;

public class Musteri extends Kullanici {

    private Veritabani veritabani;

    public Musteri(String mail, String sifre) {
        veritabani = new Veritabani();
        setMail(mail);
        setSifre(sifre);
    }

    public Veritabani getVeritabani() {
        return veritabani;
    }

    public void setVeritabani(Veritabani veritabani) {
        this.veritabani = veritabani;
    }

    @Override
    public boolean girisYap(String mail, String sifre) {
        return veritabani.getSifreFromMail(mail).equals(sifre);
    }

    @Override
    public void urunGoruntule(Urun urun) {
        System.out.println(getMail() + ", " + urun.getIsim() + " inceliyor.");
    }
}
