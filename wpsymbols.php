<?php 

/*
Plugin Name: ★ wpsymbols ★
Plugin URI: http://www.osfvad.com/wpsymbols/
Description: Want these  ✌  ★  ♥  ☠  ⚠ in your comments? This plugin will insert symbols gallery to your comment box! Go to our website for instructions on how to customize the symbols list.
Version: 1.3
Author: Max
Author URI: http://www.osfvad.com
Copyright 2010  Max  (email : support@osfvad.com)
*/




add_action('comment_form', 'symbols_add_comment_form');


function symbols_add_comment_form() {
wp_print_scripts('jquery');

include '1.inc';

/*
array below lists the symbols that appear when a user click the 'insert symbols'. Note: each symbol must be enclosed with quotation marks (") and separate symbols from each other using comma (,).
*/
$arr = array("☺","✌","★","♥","⚠","®","™","©","⚠","♽","✔","✘","➠","ツ","☜","☞","➤","☹","☮","☠","☢","☣","♔","♕","✂","✆","✈","✉","♨","☎");
reset($arr);
while (list($key, $value) = each($arr)) {
    echo "<a onclick=\"wpsymbols_add_symbols('$value')\" class=\"wp_symbols_select\">$value</a> | ";
}

echo "<span id=\"wpsymbols_add_moresymbols\" style=\"display: none;\">";

/*
array below lists the symbols that appear when a user click 'more symbols'. Note: each symbol must be enclosed with quotation marks (") and separate symbols from each other using comma (,).
*/
$arr2 = array("♗","♘","♙","♚","♛","♜","♝","♞","✿","❂","❆","▶","◀","←","↑","→","↓","↔","↯","☥","☦","☨","☩","☯","♩","♪","♫","♬","☂","☁","☀");
reset($arr2);
while (list($key, $value) = each($arr2)) {
    echo "<a onclick=\"wpsymbols_add_symbols('$value')\" class=\"wp_symbols_select\">$value</a> | ";
}


include '2.inc';

    }?>