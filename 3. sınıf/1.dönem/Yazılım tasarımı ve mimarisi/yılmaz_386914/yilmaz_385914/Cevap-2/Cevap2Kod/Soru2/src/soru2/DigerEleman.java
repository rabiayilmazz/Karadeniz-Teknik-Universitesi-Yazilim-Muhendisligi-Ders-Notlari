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
public class DigerEleman implements Kullanici{

    private String no;
    DigerEleman(String No) {
		no = No;
    }

    @Override
    public boolean HesapOku(String hesapNo) {
        return true;    
    }

    void HesapOku() {
    }
    
}
