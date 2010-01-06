<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}
t3lib_extMgm::addStaticFile($_EXTKEY,'static/iphone_routing/', 'Iphone Routing');

$tempColumns = array (
	'tx_cretectioniphonerouting_id' => array (		
		'exclude' => 1,		
		'label' => 'LLL:EXT:cretection_iphone_routing/locallang_db.xml:pages.tx_cretectioniphonerouting_id',		
		'config' => array (
			'type' => 'group',	
			'internal_type' => 'db',	
			'allowed' => 'pages',	
			'size' => 1,	
			'minitems' => 0,
			'maxitems' => 1,
		)
	),
);


t3lib_div::loadTCA('pages');
t3lib_extMgm::addTCAcolumns('pages',$tempColumns,1);
t3lib_extMgm::addToAllTCAtypes('pages', 'tx_cretectioniphonerouting_id;;;;0-1-1', '1,5 ');
?>
