package edu.ktu;

public class Daire implements AlanHesap, CevreHesap {

    private double yaricap;
    public Daire(double yaricap) {
        this.yaricap = yaricap;
    }
    public Daire() { }

    public double getYaricap() {
        return yaricap;
    }

    public void setYaricap(double yaricap) {
        this.yaricap = yaricap;
    }

    @Override
    public double cevreHesapla() {
        return 6 * getYaricap();
    }

    @Override
    public double alanHesapla() {
        return 3 * getYaricap() * getYaricap();
    }

}
