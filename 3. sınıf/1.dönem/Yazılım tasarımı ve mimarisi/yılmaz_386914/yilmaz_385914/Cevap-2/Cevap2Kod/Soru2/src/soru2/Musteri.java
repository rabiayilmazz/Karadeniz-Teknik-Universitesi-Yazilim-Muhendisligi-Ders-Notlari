/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package soru2;

/**
 *
 * @author Rabia
 */
public class Musteri implements Kullanici{

    String no;
    String ad;
    String tel;

    public Musteri(String no, String ad, String tel) {
        this.no = no;
        this.ad = ad;
        this.tel = tel;
    }
    
    @Override
    public boolean HesapOku(String hesapNo) {
        return false;
    }

    @Override
    public String toString() {
        return "Musteri{" + "no=" + no + ", ad=" + ad + ", tel=" + tel + '}';
    }
    
}
