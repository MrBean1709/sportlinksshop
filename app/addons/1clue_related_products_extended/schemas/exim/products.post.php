<?php
/***************************************************************************
*                                                                          *
*    Copyright (c) 2004 Simbirsk Technologies Ltd. All rights reserved.    *
*                                                                          *
* This  is  commercial  software,  only  users  who have purchased a valid *
* license  and  accept  to the terms of the  License Agreement can install *
* and use this program.                                                    *
*                                                                          *
****************************************************************************
* PLEASE READ THE FULL TEXT  OF THE SOFTWARE  LICENSE   AGREEMENT  IN  THE *
* "copyright.txt" FILE PROVIDED WITH THIS DISTRIBUTION PACKAGE.            *
****************************************************************************/


//
// Schema definition
//

$schema['export_fields']['Analogue tags'] = array (
	'process_get' => array ('fn_get_1c_tags', '#key', 'true'),
	'process_put' => array ('fn_set_1c_tags', '#key', '#this'),
	'linked' => false, // this field is not linked during import-export
);

return $schema;

?>
