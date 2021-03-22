package edu.ktu;

public class Kullanici {

    private String mail;
    private String ip;
    private String telefon;
    private String isim;

    public Kullanici() { }
    public Kullanici(String isim, String mail, String telefon, String ip) {
        setMail(mail);
        setTelefon(telefon);
        setIsim(isim);
        setIp(ip);
    }

    public String getIp() {
        return ip;
    }

    public void setIp(String ip) {
        this.ip = ip;
    }

    public String getMail() {
        return mail;
    }

    public void setMail(String mail) {
        this.mail = mail;
    }

    public String getTelefon() {
        return telefon;
    }

    public void setTelefon(String telefon) {
        this.telefon = telefon;
    }

    public String getIsim() {
        return isim;
    }

    public void setIsim(String isim) {
        this.isim = isim;
    }
}
