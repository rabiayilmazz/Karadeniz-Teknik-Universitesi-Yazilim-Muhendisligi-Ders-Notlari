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
public interface IVisitor {
    public boolean visit(Yetkili yetkili);
    public boolean visit(DigerEleman digerEleman);
}
