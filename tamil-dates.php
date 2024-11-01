<?php

/*
 * Plugin Name:       Tamil Dates
 * Plugin URI:        https://wordpress.org/plugins/tamil-dates/
 * Description:       Convert English months and weekdays into Tamil language.
 * Version:           1.0
 * Tested Up to:      6.3
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Ranzuni
 * Author URI:        https://profiles.wordpress.org/ranzuni/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       tamil-dates
 * Domain Path:       /languages
 */

/**
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.

 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <https://www.gnu.org/licenses/>.
 */

if( !defined( 'ABSPATH' ) ) {
    exit();
}

define( 'TAMIL_DATES_PLUGIN_VERSION', '1.0' );
define( 'TAMIL_DATES_PLUGIN_FILE', __FILE__ );
define( 'TAMIL_DATES_PLUGIN_PATH', plugin_dir_path( __FILE__ ) );
define( 'TAMIL_DATES_PLUGIN_URL', plugin_dir_url( __FILE__ ) );
define( 'TAMIL_DATES_PLUGIN_BASENAME', plugin_basename( __FILE__ ) );

add_action( 'init', 'tamil_dates_load_textdomain' );
function tamil_dates_load_textdomain() {
  load_plugin_textdomain( 'tamil-dates', false, dirname( plugin_basename( __FILE__ ) ) . '/languages' ); 
}

function tamil_dates_convert_days( $str ) {
  $day_en = array( 'Saturday', 'Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'SATURDAY', 'SUNDAY', 'MONDAY', 'TUESDAY', 'WEDNESDAY', 'THURSDAY', 'FRIDAY', 'saturday', 'sunday', 'monday', 'tuesday', 'wednesday', 'thursday', 'friday' );
  $day_hi = array( 'சனிக்கிழமை', 'ஞாயிற்றுக்கிழமை', 'திங்கட்கிழமை', 'செவ்வாய்', 'புதன்', 'வியாழன்', 'வெள்ளி', 'சனிக்கிழமை', 'ஞாயிற்றுக்கிழமை', 'திங்கட்கிழமை', 'செவ்வாய்', 'புதன்', 'வியாழன்', 'வெள்ளி', 'சனிக்கிழமை', 'ஞாயிற்றுக்கிழமை', 'திங்கட்கிழமை', 'செவ்வாய்', 'புதன்', 'வியாழன்', 'வெள்ளி' );
  return str_replace( $day_en, $day_hi, $str );
}

function tamil_dates_convert_days_shorten( $str ) {
  $days_en = array( 'Sat', 'Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'SAT', 'SUN', 'MON', 'TUE', 'WED', 'THU', 'FRI', 'sat', 'sun', 'mon', 'tue', 'wed', 'thu', 'fri' );
  $days_hi = array( 'சனிக்கிழமை', 'ஞாயிற்றுக்கிழமை', 'திங்கட்கிழமை', 'செவ்வாய்', 'புதன்', 'வியாழன்', 'வெள்ளி', 'சனிக்கிழமை', 'ஞாயிற்றுக்கிழமை', 'திங்கட்கிழமை', 'செவ்வாய்', 'புதன்', 'வியாழன்', 'வெள்ளி', 'சனிக்கிழமை', 'ஞாயிற்றுக்கிழமை', 'திங்கட்கிழமை', 'செவ்வாய்', 'புதன்', 'வியாழன்', 'வெள்ளி' );
  return str_replace( $days_en, $days_hi, $str );
}

function tamil_dates_convert_months( $str ) {
  $month_en = array( 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December', 'JANUARY', 'FEBRUARY', 'MARCH', 'APRIL', 'MAY', 'JUNE', 'JULY', 'AUGUST', 'SEPTEMBER', 'OCTOBER', 'NOVEMBER', 'DECEMBER', 'january', 'february', 'march', 'april', 'may', 'june', 'july', 'august', 'september', 'october', 'november', 'december' );
  $month_hi = array( 'ஜனவரி', 'பிப்ரவரி', 'மார்ச்', 'ஏப்ரல்', 'மே', 'ஜூன்', 'ஜூலை', 'ஆகஸ்ட்', 'செப்டம்பர்', 'அக்டோபர்', 'நவம்பர்', 'டிசம்பர்', 'ஜனவரி', 'பிப்ரவரி', 'மார்ச்', 'ஏப்ரல்', 'மே', 'ஜூன்', 'ஜூலை', 'ஆகஸ்ட்', 'செப்டம்பர்', 'அக்டோபர்', 'நவம்பர்', 'டிசம்பர்', 'ஜனவரி', 'பிப்ரவரி', 'மார்ச்', 'ஏப்ரல்', 'மே', 'ஜூன்', 'ஜூலை', 'ஆகஸ்ட்', 'செப்டம்பர்', 'அக்டோபர்', 'நவம்பர்', 'டிசம்பர்' );
  return str_replace( $month_en, $month_hi, $str );
}

function tamil_dates_convert_months_shorten( $str ) {
  $months_en = array( 'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec', 'JAN', 'FEB', 'MAR', 'APR', 'MAY', 'JUN', 'JUL', 'AUG', 'SEP', 'OCT', 'NOV', 'DEC', 'jan', 'feb', 'mar', 'apr', 'may', 'jun', 'jul', 'aug', 'sep', 'oct', 'nov', 'dec' );
  $months_hi = array( 'ஜனவரி', 'பிப்ரவரி', 'மார்ச்', 'ஏப்ரல்', 'மே', 'ஜூன்', 'ஜூலை', 'ஆகஸ்ட்', 'செப்டம்பர்', 'அக்டோபர்', 'நவம்பர்', 'டிசம்பர்', 'ஜனவரி', 'பிப்ரவரி', 'மார்ச்', 'ஏப்ரல்', 'மே', 'ஜூன்', 'ஜூலை', 'ஆகஸ்ட்', 'செப்டம்பர்', 'அக்டோபர்', 'நவம்பர்', 'டிசம்பர்', 'ஜனவரி', 'பிப்ரவரி', 'மார்ச்', 'ஏப்ரல்', 'மே', 'ஜூன்', 'ஜூலை', 'ஆகஸ்ட்', 'செப்டம்பர்', 'அக்டோபர்', 'நவம்பர்', 'டிசம்பர்' );
  return str_replace( $months_en, $months_hi, $str );
}

function tamil_dates( $output ) {
  $output = tamil_dates_convert_days( $output );
  $output = tamil_dates_convert_days_shorten( $output );
  $output = tamil_dates_convert_months( $output );
  $output = tamil_dates_convert_months_shorten( $output );
  return $output;
}

add_action( 'init', 'apply_tamil_dates' );
function apply_tamil_dates() {
  add_filter( 'the_date', 'tamil_dates' );
  add_filter( 'get_the_date', 'tamil_dates' );
  add_filter( 'date_i18n', 'tamil_dates' );
  add_filter( 'get_comment_date', 'tamil_dates' );
  add_filter( 'widget_text', 'tamil_dates' );
  add_filter( 'get_calendar', 'tamil_dates' );
  add_filter( 'get_the_archive_title', 'tamil_dates' );
  add_filter( 'get_feed_build_date', 'tamil_dates' );
  add_filter( 'get_the_modified_date', 'tamil_dates' );
  add_filter( 'the_modified_date', 'tamil_dates' );
  add_filter( 'the_weekday_date', 'tamil_dates' );
  add_filter( 'wp_date', 'tamil_dates' );
  add_filter( 'the_weekday', 'tamil_dates' );
}

register_activation_hook( __FILE__, 'tamil_dates_notice_hook' );
function tamil_dates_notice_hook() {
    set_transient( 'tamil-dates-notification', true, 5 );
}

add_action( 'admin_notices', 'tamil_dates_activation_notification' ); 
function tamil_dates_activation_notification(){
    if( get_transient( 'tamil-dates-notification' ) ) {
        ?>
        <div class="updated notice is-dismissible">
            <p><?php esc_attr_e( 'Thank you for installing Tamil Dates!', 'tamil-dates' ); ?></p>
        </div>
        <?php
        delete_transient( 'tamil-dates-notification' );
    }
}