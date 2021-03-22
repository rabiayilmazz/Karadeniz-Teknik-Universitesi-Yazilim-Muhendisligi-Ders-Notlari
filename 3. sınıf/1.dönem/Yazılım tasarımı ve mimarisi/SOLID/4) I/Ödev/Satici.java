package edu.ktu;

public class Satici extends Kullanici implements SatisYapabilen {

    Veritabani veritabani;

    public Satici(String mail, String sifre, Veritabani veritabani) {
        this.veritabani = veritabani;
        setMail(mail);
        setSifre(sifre);
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
