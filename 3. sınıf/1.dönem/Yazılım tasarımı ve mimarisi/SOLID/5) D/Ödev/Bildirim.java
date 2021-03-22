package edu.ktu;

public class Bildirim implements Iletisim {

    public void bildirimGoster(String ip, String mesaj) {
        System.out.println(ip + " adresine " + mesaj + " gönderildi.");
    }

    @Override
    public void bilgiGonder(Kullanici kullanici, String mesaj) {
        bildirimGoster(kullanici.getIp(), mesaj);
    }
}
