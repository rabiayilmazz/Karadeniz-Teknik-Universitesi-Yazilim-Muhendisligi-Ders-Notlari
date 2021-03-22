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
public class Soru2 {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        IVisitor vi = new KimlikOkuyucu();
        Yetkili yetkili = new Yetkili("1234");
        DigerEleman dE1 = new DigerEleman("1234");
        Musteri musteri = new Musteri("3456", "Rabia", "0978647689");
        
        vi.visit(dE1);
        vi.visit(yetkili);
        
        if(vi.visit(dE1) == false){
            System.out.println("Müşteri bilgileri okunmaz...");
        }
        else musteri.toString();
        if (vi.visit(yetkili) == true) {
            System.out.println("Musteri bilgileri okunuyor...");
            String toString = musteri.toString();
            System.out.println(toString);
        }
        else {
            System.out.println("Musteri bilgileri okunamaz...");
        }
        
        yetkili.HesapOku("1234");
        dE1.HesapOku("1234");

    }
    
}
