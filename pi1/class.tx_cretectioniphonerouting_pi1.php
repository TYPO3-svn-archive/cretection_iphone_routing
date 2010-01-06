<?php
/***************************************************************
*  Copyright notice
*
*  (c) 2009 Jonathan Starck <info@cretection.de>
*  All rights reserved
*
*  This script is part of the TYPO3 project. The TYPO3 project is
*  free software; you can redistribute it and/or modify
*  it under the terms of the GNU General Public License as published by
*  the Free Software Foundation; either version 2 of the License, or
*  (at your option) any later version.
*
*  The GNU General Public License can be found at
*  http://www.gnu.org/copyleft/gpl.html.
*
*  This script is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*  GNU General Public License for more details.
*
*  This copyright notice MUST APPEAR in all copies of the script!
***************************************************************/

require_once(PATH_tslib.'class.tslib_pibase.php');


/**
 * Plugin 'iPhone Routing' for the 'cretection_iphone_routing' extension.
 *
 * @author	Jonathan Starck <info@cretection.de>
 * @package	TYPO3
 * @subpackage	tx_cretectioniphonerouting
 */
class tx_cretectioniphonerouting_pi1 extends tslib_pibase {
	var $prefixId      = 'tx_cretectioniphonerouting_pi1';		// Same as class name
	var $scriptRelPath = 'pi1/class.tx_cretectioniphonerouting_pi1.php';	// Path to this script relative to the extension dir.
	var $extKey        = 'cretection_iphone_routing';	// The extension key.
	var $pi_checkCHash = true;
	
	/**
	 * The main method of the PlugIn
	 *
	 * @param	string		$content: The PlugIn content
	 * @param	array		$conf: The PlugIn configuration
	 * @return	The content that is displayed on the website
	 */
	 
	function main($content,$conf){
		 
		if(!preg_match('/iphone/i',t3lib_div::getIndpEnv(HTTP_USER_AGENT))) {
			return;
		}
		
		$id = $GLOBALS['TSFE']->page['tx_cretectioniphonerouting_id'];
		
		if (intval($conf['id'])){
			$cretectioniphonerouting_link = $this->pi_linkTP_keepPIvars_url(array(),'','',$conf['id']);
			header("Location: $cretectioniphonerouting_link");
		}elseif (intval($id)) {
			$cretectioniphonerouting_link = $this->pi_linkTP_keepPIvars_url(array(),'','',intval($id));
			header("Location: $cretectioniphonerouting_link");
		}else{
		return;
		}
	}
}





if (defined('TYPO3_MODE') && $TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/cretection_iphone_routing/pi1/class.tx_cretectioniphonerouting_pi1.php'])	{
	include_once($TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/cretection_iphone_routing/pi1/class.tx_cretectioniphonerouting_pi1.php']);
}

?>