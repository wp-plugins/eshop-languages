<?php
/*
Plugin Name: eShop Languages
Plugin URI: http://quirm.net/forum/topic.php?id=2512
Description: eShop custom plugin for storing language files. If you have your own translation installed in /eshop-languages/ please back it up before upgrading. Then, if your own translation is better/newer than the one inlcuded in this plugin, please consider sharing yours...

Version: 0.4
Author: Rich Pedley 
Author URI: http://quirm.net/
 
    Copyright 2013 R PEDLEY  (email : rich@quirm.net)
 
    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.
 
    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.
 
    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
*/
 
add_filter('eshop_language_dir','eshop_language');
 
function eshop_language(){
	return 'eshop-languages';
}
?>
