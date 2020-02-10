<?php
/**
 * @package     Fix_MySQL_8_Issue
 * @author      Studio Visual
 * @license     GPL-2.0+
 *
 * Plugin Name: Fix Mysql 8 Issue
 * Plugin URI: https://studiovisual.com.br
 * Description: Solves the error "ORDER BY clause is not in SELECT list" presented in MySQL 8+
 * Version: 0.1.0
 * Author: Studio Visual
 * Author URI: https://studiovisual.com.br
 */

add_action( 'init', 'mysql_set_sql_mode_traditional', -1);

function mysql_set_sql_mode_traditional() 
{
    global $wpdb;
    $wpdb->query("SET SESSION sql_mode = 'TRADITIONAL'");
}
