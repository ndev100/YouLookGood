<?php

/*
Plugin Name: YouLookGood
Plugin URI: www.abracadabra.com
Description: A simple You look good compliment
Version: 1.0
Author: Niv
Author URI: www.abracadabra.com
License: GPL
*/

//$name = get_userdata();

function Youlookgood()
{
echo "You look good man!";
}
add_action('get_header', 'Youlookgood');

?>
