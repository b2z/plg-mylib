<?php
/**
 * @package     Mylib plugin
 * @author      Dmitry Rekun
 * @copyright   Copyright (C) 2013 Dmitry Rekun. All rights reserved.
 * @license     GNU General Public License version 3 or later.
 */

defined('_JEXEC') or die;

/**
 * @package  Mylib plugin
 *
 * Mylib plugin class.
 */
class plgSystemMylib extends JPlugin
{
	/**
	 * Method to register custom library.
	 *
	 * return  void
	 */
	public function onAfterInitialise()
	{
		JLoader::registerPrefix('Mylib', JPATH_LIBRARIES . '/mylib');
	}
}
