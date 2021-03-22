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
public class Soru1 {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
    Kullanici sefa = new Kullanici("Sefa Aras", "sefa@ktu.edu");
    Kullanici hakan = new Kullanici("Hakan Bozkurt", "hakan@ktu.edu");

    Urun bilgisayar = new Urun("Bilgisayar", 100);

    System.out.println("1. Teklif");
    bilgisayar.teklifVer(sefa, 50);
    System.out.println("2. Teklif");
    bilgisayar.teklifVer(hakan, 150);
    System.out.println("3. Teklif");
    bilgisayar.teklifVer(sefa, 200);
    System.out.println("4. Teklif");
    bilgisayar.teklifVer(hakan, 250);

    }
    
}
