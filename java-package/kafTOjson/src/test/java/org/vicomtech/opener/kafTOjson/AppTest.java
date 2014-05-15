package org.vicomtech.opener.kafTOjson;

import java.io.InputStream;

import junit.framework.Test;
import junit.framework.TestCase;
import junit.framework.TestSuite;
import java.net.URL;

/**
 * Unit test for simple App.
 */
public class AppTest 
    extends TestCase
{
    /**
     * Create the test case
     *
     * @param testName name of the test case
     */
    public AppTest( String testName )
    {
        super( testName );
    }

    /**
     * @return the suite of tests being tested
     */
    public static Test suite()
    {
        return new TestSuite( AppTest.class );
    }

    /**
     * Rigourous Test :-)
     */
    public void testApp()
    {
    	Main prog = new Main();
    
    	String kaf_example=AppTest.class.getResource("/example.kaf").getPath();
    	String kaf2json=AppTest.class.getResource("/kaf2json.xsl").getPath();
      	
    	
    	prog.execute(kaf2json, kaf_example);
    
    	
        assertTrue( true );
    }
}
