<?php
/* 
Plugin Name: Remove P Tag Around Image
Plugin URI: http://www.TechnoArea.In
Description: This Plugin Removes paragraph tag from around your images which Wordpress puts by default.
Author: Rahul Sharma
Author URI: http://www.RahulSharmaHere.In
Version: 1.0

Copyright (C) Sat Feb 24 2013 Rahul Sharma


    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/
function filter_ptags_on_images($content){
   return preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(<\/a>)?\s*<\/p>/iU', '\1\2\3', $content);
}

add_filter('the_content', 'filter_ptags_on_images');
?>