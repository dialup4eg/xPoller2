<?php
$properties = array();

$tmp = array(
	'id' => array(
		'type' => 'textfield',
		'value' => '',
	),
	'formOuterTpl' => array(
		'type' => 'textfield',
		'value' => 'tpl.xPoller2.form.outer',
	),
	'resultOuterTpl' => array(
		'type' => 'textfield',
		'value' => 'tpl.xPoller2.result.outer',
	),
	'optionTpl' => array(
    	'type' => 'textfield',
		'value' => 'tpl.xPoller2.option',
	),
	'resultTpl' => array(
    	'type' => 'textfield',
		'value' => 'tpl.xPoller2.result',
	),
	'outputSeparator' => array(
		'type' => 'textfield',
		'value' => "\n",
	),
	'toPlaceholder' => array(
		'type' => 'combo-boolean',
		'value' => false,
	),
	'allowGuest' => array(
		'type' => 'combo-boolean',
		'value' => true,
	),
);

foreach ($tmp as $k => $v) {
	$properties[] = array_merge(
		array(
			'name' => $k,
			'desc' => PKG_NAME_LOWER . '_prop_' . $k,
			'lexicon' => PKG_NAME_LOWER . ':properties',
		), $v
	);
}

return $properties;