<?php
/**
* @package   Theme MinBootstrap{y}
* @author    Stephan W. http://www.3d-hobby-art.de
* @copyright Copyright (C) Stephan W.
* @license   http://www.gnu.org/licenses/gpl.html GNU/GPL
*/

// include config and layout
$base = dirname(dirname(dirname(__FILE__)));
include($base.'/config.php');
include($warp['path']->path('layouts:'.preg_replace('/'.preg_quote($base, '/').'/', '', __FILE__, 1)));