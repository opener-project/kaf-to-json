<?php
/**
 * Class kaf2json: converts kaf to JSON format.
 * Installazione: caricare lo stylesheet kaf2json.xsl nella stessa directory  di kaf2json.php
/**
 * kaf2json.php
 *
 * Class kaf2json: converts kaf to JSON format.
 * Instructions: Load the sylesheet kaf2json.xsl to the same directory of kaf2json.php
 *
 * @author Andrea Marchetti <andrea.marchetti@iit.cnr.it>
 * @version 1.0
 * @date 03/08/2013
 *  
 */  
 
class kaf2json
{
	public  $xslFileName;
	private $xlsDoc;
	private $xslProcessor;
	
	public function __construct($xsl="kaf2json.xsl"){
		if($xsl==null) $xsl = "kaf2json.xsl";
		$this->xslFileName   = $xsl;
		
		// Carico il file XSLT
		$this->xslDoc = new DOMDocument();
		$this->xslDoc->load($xsl);	
		$this->xslProcessor = new XSLTProcessor();
		$this->xslProcessor->importStylesheet($this->xslDoc);
	}

	public function getJsonFromFile($kafFileName){
		$xmlDoc = new DOMDocument();
		$xmlDoc->load($kafFileName);
		return($this->xslProcessor->transformToXML($xmlDoc));
	}
	
	public function getJsonFromString($kaf){
		$xmlDoc = new DOMDocument();
		$xmlDoc->loadXML($kaf);
		return($this->xslProcessor->transformToXML($xmlDoc));
	}
	
}
?>
