<?php
/**
 * User: Joe Linn
 * Date: 3/20/2014
 * Time: 3:00 PM
 */

error_reporting(E_ALL | E_STRICT);

//composer autoloader
$autoloader = require dirname(__DIR__) . '/vendor/autoload.php';

// doctrine annotations autoloader for serializer
\Doctrine\Common\Annotations\AnnotationRegistry::registerAutoloadNamespace('JMS\Serializer\Annotation', dirname(__DIR__) . '/vendor/jms/serializer/src');