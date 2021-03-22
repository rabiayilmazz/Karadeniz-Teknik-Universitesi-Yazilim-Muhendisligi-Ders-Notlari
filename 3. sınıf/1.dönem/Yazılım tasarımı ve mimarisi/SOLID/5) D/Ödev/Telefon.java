package edu.ktu;

public class Telefon implements Iletisim {

    public void smsGonder(String telefon, String mesaj) {
        System.out.println(telefon + " adresine " + mesaj + " gönderildi.");
    }

    @Override
    public void bilgiGonder(Kullanici kullanici, String mesaj) {
        smsGonder(kullanici.getTelefon(), mesaj);
    }
}
