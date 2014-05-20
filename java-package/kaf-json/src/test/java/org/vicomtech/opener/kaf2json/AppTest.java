package org.vicomtech.opener.kaf2json;


import java.io.InputStream;




import junit.framework.Test;
import junit.framework.TestCase;
import junit.framework.TestSuite;



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
  
    
    	InputStream inStream = AppTest.class.getResourceAsStream("/example.kaf");
        Main prog = new Main();
    
    	prog.execute(new String[]{}, inStream, System.out);
    	
        assertTrue( true );
    }
}
