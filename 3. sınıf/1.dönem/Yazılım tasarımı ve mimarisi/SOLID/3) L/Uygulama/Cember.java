package edu.ktu;

public class Cember implements CevreHesap {

    private double yaricap;
    public Cember(double yaricap) {
        this.yaricap = yaricap;
    }
    public Cember() { }

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

}
