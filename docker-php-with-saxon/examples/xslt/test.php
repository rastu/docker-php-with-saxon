<?php
//http://www.w3schools.com/xsl/xsl_apply_templates.asp

/**
[0] => __construct
[1] => __destruct
[2] => createAtomicValue
[3] => parseXmlFromString
[4] => parseXmlFromFile
[5] => setcwd
[6] => newXPathProcessor
[7] => newXsltProcessor
[8] => newXQueryProcessor
[9] => newSchemaValidator
[10] => setResourcesDirectory
[11] => setConfigurationProperty
[12] => version
 **/
$proc  = new Saxon\SaxonProcessor(false);

/**
[0] => __construct
[1] => __destruct
[2] => getStringValue
[3] => getNodeKind
[4] => getNodeName
[5] => isAtomic
[6] => getChildCount
[7] => getAttributeCount
[8] => getChildNode
[9] => getParent
[10] => getAttributeNode
[11] => getAttributeValue
 **/
$xslt = $proc->newXsltProcessor();
$res= $xslt->transformFileToString(
    __DIR__ . '/test.xml',
    __DIR__ . '/test.xsl'
);
print_r ($res);
//print_r (get_class_methods($res));
//print_r (get_class_methods($proc));
//print_r ($res);
