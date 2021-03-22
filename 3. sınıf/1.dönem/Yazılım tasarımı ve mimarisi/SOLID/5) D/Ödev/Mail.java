package edu.ktu;

public class Mail implements Iletisim {

    public void mailGonder(String mail, String mesaj) {
        System.out.println(mail + " adresine " + mesaj + " gönderildi.");
    }

    @Override
    public void bilgiGonder(Kullanici kullanici, String mesaj) {
        mailGonder(kullanici.getMail(), mesaj);
    }
}
