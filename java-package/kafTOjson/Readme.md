
This java script translates KAF to JSON using the .xsl schema provided by CNR.
The aim of this project is to be able to create a webservice easily.

To compile:

mvn install

To use:

java -jar target/kafTOjson-0.0.1-SNAPSHOT.jar src/test/resources/kaf2json.xsl src/test/resources/example.kaf 




