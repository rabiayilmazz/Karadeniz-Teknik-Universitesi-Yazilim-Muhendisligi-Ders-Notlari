package edu.ktu;

public class GirisYap implements Giris {

    private Veritabani veritabani;

    public GirisYap(Veritabani veritabani) {
        this.veritabani = veritabani;
    }

    @Override
    public boolean girisYap(String mail, String sifre) {
        return veritabani.getSifreFromMail(mail).equals(sifre);
    }
}
