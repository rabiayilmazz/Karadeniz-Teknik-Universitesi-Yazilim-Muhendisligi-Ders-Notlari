/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package soru1;

/**
 *
 * @author Rabia
 */
public class Giris {
    private Veritabani veritabani = new Veritabani();
    
    public boolean girisKontrol(String mail, String sifre){
        return (veritabani.getSifreKontrol(mail)).equals(sifre);
    }
}
