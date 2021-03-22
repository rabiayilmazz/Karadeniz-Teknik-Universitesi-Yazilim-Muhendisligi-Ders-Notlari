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
public class Yetkili implements Kullanici{

    private String no;
    Yetkili (String No) {
	No = no;
}

    
    @Override
    public boolean HesapOku(String hesapNo) {
        return true;
    }

    public String getNo() {
        return no;
    }

    public void setNo(String no) {
        this.no = no;
    }

}
