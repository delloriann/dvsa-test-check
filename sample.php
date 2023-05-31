<?php
/**
 * DVSA Test Cancellation Check
 *
 * @category File
 * @package  DVSATestCheck
 * @author   Craig Watson <craig@cwatson.org>
 * @license  https://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 * @link     https://github.com/craigwatson/dvsa-test-check
 */

// == Personal data
$check_data = array (
  'person' => array (
    'licence_number' => 'LEHON002196V99LH',
    'application_id' => '56792816',
    'latest_date'    => '2023-06-31', // Must be YYYY-MM-DD
    'earliest_date'  => '2023-06-06', // Must be YYYY-MM-DD
    'ideal_day'      => '2023-06-08', // Must be one of MON, TUE, WED, THU, FRI, SAT or SUN
    'email_to'       => 'valentynlehoniak@gmail.com',
  )
);

// == Proxy
$proxy = array (
  'host' => '',
  'auth' => ''
);

// == Email from address
$email_from = "misterwolfgames@gmail.com";

// == Script output directory
$out_dir = ".";

// == License Check Personal data
$licence_data = array (
  'person' => array(
    'licence_number' => '',
    'ni_number'      => '',
    'postcode'       => '',
    'email_to'       => '',
  )
);

?>
