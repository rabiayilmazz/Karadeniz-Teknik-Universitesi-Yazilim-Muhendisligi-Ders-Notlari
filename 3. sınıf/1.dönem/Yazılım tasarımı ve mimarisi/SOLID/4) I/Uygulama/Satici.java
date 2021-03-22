package edu.ktu;

public class Satici extends Kullanici implements SatisYapabilen {

    private Veritabani veritabani;

    public Satici(String mail, String sifre) {
        veritabani = new Veritabani();
        setMail(mail);
        setSifre(sifre);
    }

    @Override
    boolean girisYap(String mail, String sifre) {
        return veritabani.getSifreFromMail(mail).equals(sifre);
    }

    @Override
    void urunGoruntule(Urun urun) {
        System.out.println(getMail() + ", " + urun.getIsim() + ", " + urun.getFiyat() + " inceliyor.");
    }

    @Override
    public void urunEkle(Urun urun) {
        veritabani.urunEkle(urun);
    }
}
