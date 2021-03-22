package edu.ktu;

public class Adres {
    private String ulke;
    private String il;
    private String ilce;
    private int postKodu;
    public String getUlke() { return ulke; }
    public void setUlke(String ulke) { this.ulke = ulke; }
    public String getIl() { return il; }
    public void setIl(String il) { this.il = il; }
    public String getIlce() { return ilce; }
    public void setIlce(String ilce) { this.ilce = ilce; }
    public int getPostKodu() { return postKodu; }
    public void setPostKodu(int postKodu) { this.postKodu = postKodu; }
    public String toString() {
        return getUlke() + " " + getIl() + " " + getIlce() + " " + getPostKodu();
    }
}
