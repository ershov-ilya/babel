<?php
/**
 * Default properties for BabelLinks snippet
 * 
 * @author Jakob Class <jakob.class@class-zec.de>
 *
 * @package babel
 * @subpackage build
 */
$properties = array(
    array(
        'name' => 'resourceId',
        'desc' => 'babellinks.resourceId',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
        'lexicon' => 'babel:properties',
    ),
	array(
        'name' => 'tpl',
        'desc' => 'babellinks.tpl',
        'type' => 'textfield',
        'options' => '',
        'value' => 'babelLink',
        'lexicon' => 'babel:properties',
    ),
    array(
        'name' => 'activeCls',
        'desc' => 'babellinks.activeCls',
        'type' => 'textfield',
        'options' => '',
        'value' => 'active',
        'lexicon' => 'babel:properties',
    ),
);

return $properties;