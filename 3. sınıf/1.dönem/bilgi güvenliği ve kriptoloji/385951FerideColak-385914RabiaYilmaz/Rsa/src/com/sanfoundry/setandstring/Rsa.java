
package com.sanfoundry.setandstring;
import java.io.DataInputStream;
import java.io.IOException;
import java.math.BigInteger;
import java.util.Random;

public class Rsa

{
    private BigInteger p;
    private BigInteger q;
    private BigInteger N;
    private BigInteger phi;
    private BigInteger e;
    private BigInteger d;
    private int        bitlength = 1024;
    private Random     r;
    public Rsa()
    {
        r = new Random();
        p = BigInteger.probablePrime(bitlength, r); //1024 bitlik asalsayı
        q = BigInteger.probablePrime(bitlength, r); //1024 bitlik asalsayı
        N = p.multiply(q); // n=p*q
        phi = p.subtract(BigInteger.ONE).multiply(q.subtract(BigInteger.ONE)); // phi =(p-1)*(q-1)
        e = BigInteger.probablePrime(bitlength / 2, r); 
        while (phi.gcd(e).compareTo(BigInteger.ONE) > 0 && e.compareTo(phi) < 0)
        {
            e.add(BigInteger.ONE);
        }
        d = e.modInverse(phi);
    }
    public Rsa(BigInteger e, BigInteger d, BigInteger N)
    {
        this.e = e;
        this.d = d;
        this.N = N;
        
    }
    @SuppressWarnings("deprecation")
    public static void main(String[] args) throws IOException
    {
        Rsa rsa = new Rsa();
        System.out.println(rsa.toString());
        DataInputStream in = new DataInputStream(System.in);
        String teststring;
        System.out.println("Şifrelenecek metni giriniz:");
        teststring = in.readLine();
        sifrele(teststring);
        
    }

    private static String bytesToString(byte[] encrypted)
    {
        String test = "";
        for (byte b : encrypted)
        {
            test += Byte.toString(b);
        }
        return test;
    }
    
    public byte[] kript(byte[] message)
    {
        return (new BigInteger(message)).modPow(e, N).toByteArray();
    }
    public byte[] dekript(byte[] message)
    {
        return (new BigInteger(message)).modPow(d, N).toByteArray();
    }
     private static void sifrele(String teststring) {
        Rsa rsa = new Rsa();
        System.out.println("Şifrelenecek string: " + teststring);
        System.out.println("Stringin byte degeri: " + bytesToString(teststring.getBytes()));
        // şifrelenmiş
        byte[] encrypted = rsa.kript(teststring.getBytes());
        // deşifrelenmiş 
        byte[] decrypted = rsa.dekript(encrypted);
        //System.out.println("sonuc String: " + bytesToString(teststring.getBytes()));
        System.out.println("Şifrelenmiş byte: " + bytesToString(encrypted));
        System.out.println("Deşifrelenecek byte: " + bytesToString(decrypted));
        System.out.println("Deşifrelenmiş string: " + new String(decrypted));
                
    }
     
     
    /*@Override
    public String toString() {
        return "Public değerler: \n" + "N=" + N + ", \ne=" + e + '}';
    }*/

    @Override
    public String toString() {
        return "Rsa{" + "p=" + p + ", \nq=" + q + ", \nN=" + N + ", \nphi=" + phi + ", \ne=" + e + ", \nd=" + d + ", \nbitlength=" + bitlength + ", \nr=" + r + '}';
    }
}