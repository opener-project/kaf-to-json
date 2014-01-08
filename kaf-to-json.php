<?php

/**
 * kaf-to-json.php
 *
 * It converts a kaf text into the json corresponding version
 * Input: kaf plain text			Output: json plain text to the stdout
 *
 * @author Stefano Abbate <stefano.abbate@iit.cnr.it>
 * @version 1.0
 * @date 24/10/2013
 *  
 */ 

require_once("./kaf2json.php");
//error_reporting(E_ALL);

	// xsl style file
    $xsl = "./kaf2json.xsl";
	
	// Retrieves the uuid and kaf values
	$uuid = $_POST["request_id"];
    $kaf = $_POST["input"];
	
	if (!isset($uuid) or !isset($kaf)) return "";
		
	// Creates a kaf2json object
    $jsonProc = new kaf2json($xsl);

	// Converts from string
    $json = $jsonProc->getJsonFromString($kaf);
 	$json_data = json_decode($json, true);

	echo $json_data;

?>