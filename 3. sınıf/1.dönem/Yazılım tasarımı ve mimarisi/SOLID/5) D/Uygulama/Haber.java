package edu.ktu;

import java.util.ArrayList;

public class Haber {

    private Mail mail;
    private Bildirim bildirim;
    private ArrayList<Iletisim> iletisimListesi;

    public  Haber() {
        iletisimListesi = new ArrayList<>();
        mail = new Mail();
        bildirim = new Bildirim();
        iletisimListesi.add(mail);
        iletisimListesi.add(bildirim);
    }

    public void bilgilendir(Kullanici kullanici, String mesaj) {

        for(Iletisim iletisim : iletisimListesi) {
            iletisim.bilgiGonder(kullanici, mesaj);
        }
        /*
        mail.mailGonder(kullanici.getMail(), mesaj);
        bildirim.bildirimGoster(kullanici.getIp(), mesaj);
         */
    }
}
