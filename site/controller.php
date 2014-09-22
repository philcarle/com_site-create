<?php

/**
 * @version     1.0.0
 * @package     com_sitecreate
 * @copyright   Copyright (C) 2014. Tous droits réservés.
 * @license     GNU General Public License version 2 ou version ultérieure ; Voir LICENSE.txt
 * @author      mhamdi karim <k.mhamdi@lacentralepharma.com> - http://
 */
// No direct access
defined('_JEXEC') or die;

jimport('joomla.application.component.controller');

class SitecreateController extends JController {

    public function display($cachable = false, $urlparams = false) {
        require_once JPATH_COMPONENT . '/helpers/sitecreate.php';

        parent::display($cachable, $urlparams);

        return $this;
    }

}
