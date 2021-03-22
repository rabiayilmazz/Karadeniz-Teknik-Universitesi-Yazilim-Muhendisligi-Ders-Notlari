/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package soru2;

import java.awt.BorderLayout;

/**
 *
 * @author Rabia
 */
public class KimlikOkuyucu implements IVisitor{

    @Override
    public boolean visit(Yetkili yetkili) {
        return true;
    }

    @Override
    public boolean visit(DigerEleman digerEleman) {
        return false;
    }
   
}
