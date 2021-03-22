package edu.ktu;

import java.util.ArrayList;

public class Haber {

    private Mail mail;
    private Bildirim bildirim;
    private Telefon telefon;
    private ArrayList<Iletisim> iletisimListesi;

    public  Haber() {
        iletisimListesi = new ArrayList<>();
        mail = new Mail();
        bildirim = new Bildirim();
        telefon = new Telefon();
        iletisimListesi.add(mail);
        iletisimListesi.add(bildirim);
        iletisimListesi.add(telefon);
    }

    public void bilgilendir(Kullanici kullanici, String mesaj) {

        for(Iletisim iletisim : iletisimListesi) {
            iletisim.bilgiGonder(kullanici, mesaj);
        }
    }
}
