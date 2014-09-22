<?php
/**
 * @version     1.0.0
 * @package     com_sitecreate
 * @copyright   Copyright (C) 2014. Tous droits réservés.
 * @license     GNU General Public License version 2 ou version ultérieure ; Voir LICENSE.txt
 * @author      mhamdi karim <k.mhamdi@lacentralepharma.com> - http://
 */


// no direct access
defined('_JEXEC') or die;

// Access check.
if (!JFactory::getUser()->authorise('core.manage', 'com_sitecreate')) 
{
	throw new Exception(JText::_('JERROR_ALERTNOAUTHOR'));
}

// Include dependancies
jimport('joomla.application.component.controller');

$controller	= JController::getInstance('Sitecreate');
$controller->execute(JFactory::getApplication()->input->get('task'));
$controller->redirect();
