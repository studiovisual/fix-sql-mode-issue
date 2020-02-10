<?php
/**
 * @package     Fix_SQL_Mode_Issue
 * @author      Studio Visual
 * @license     GPL-2.0+
 *
 * Plugin Name: Fix SQL Mode Issue
 * Plugin URI: https://studiovisual.com.br
 * Description: Solves the error "ORDER BY clause is not in SELECT list" presented by MySQL in WordPress because of sql_mode misconfiguration.
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
