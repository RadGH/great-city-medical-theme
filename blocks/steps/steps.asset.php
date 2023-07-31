<?php
// this type of file is usually compiled using wp-scripts in npm/node. however, this is not the case here.
// this file is not compiled and instead just a regular js file
$v = filemtime('steps.js');
return array('dependencies' => array(), 'version' => $v);
