<?php
/**
* Component Info Listing Module for Joomla 1.5
* Author:  Jeremy Ford - jeremyfo@gmail.com
* Copyright 2011 jfo.me
* http://jfo.me
* License:  GNU General Public License
* 
* ChangeLog
* 
* Version 1.0
*   - Initial Release
* Version 1.5
*  - Added Clickable Links to Component List
*  - Added Enabled/Disabled Column
* Version 1.5.1
*  - Added Totals Row/Column
*  - Added Branding
* Version 1.5.2
*  - Fixed major bug in SQL code
* Version 1.6.0
*  - Added gfx to UI
* 
*/

defined( '_JEXEC' ) or die( 'Restricted access' );

$lang	=& JFactory::getLanguage();
$doc	=& JFactory::getDocument();
$user	=& JFactory::getUser();
$db     =& JFactory::getDBO();
$link   =& JURI::base();
$mainframe =& JFactory::getApplication();

$total = null;
$total_en = null;
$total_dis = null;

// get the total number enabled components
$query = 'SELECT COUNT(*) FROM #__components WHERE parent = \'0\' AND admin_menu_img <> \'\' AND enabled = \'1\' ORDER BY name ASC';
$db->setQuery( $query );
$total_en = $db->loadResult();

//get the total number of disabled components
$query = 'SELECT COUNT(*) FROM #__components WHERE parent = \'0\' AND admin_menu_img <> \'\' AND enabled = \'0\' ORDER BY name ASC';
$db->setQuery( $query );
$total_dis = $db->loadResult();

$total = $total_en + $total_dis;

$query = 'SELECT * FROM #__components WHERE parent = \'0\' AND admin_menu_img <> \'\' ORDER BY name ASC';
$db->setQuery($query);
$items = $db->loadObjectList();

require( dirname( __FILE__ ).DS.'tmpl'.DS.'default.php' );
