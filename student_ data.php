<?php
/*
Plugin name:Student data
plugin URI:https://www.jdbfacility.com/
Description:A simple plugin
Author:Dhritimoy
Author URI:https://www.jdbfacility.com/
Version:1.0
*/

register_activation_hook( __FILE__, 'student_data_activate' );
register_activation_hook( __FILE__, 'student_data_deactivate' );

function student_data_activate(){
	global $wpdb;
	global $table_prefix;
	$table=$table_prefix.'student_data';
	$sql="CREATE TABLE $table (
  `Name` varchar(50) NOT NULL,
  `Phone no.` int(10) NOT NULL,
  `email id` varchar(40) NOT NULL,
  `Marks_Subject1` int(60) NOT NULL,
  `Marks_Subject2` int(60) NOT NULL,
  `Marks_Subject3` int(60) NOT NULL,
  `Marks_Subject4` int(60) NOT NULL,
  `Marks_Subject` int(60) NOT NULL,
  `Total marks` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;ALTER TABLE $table
  ADD PRIMARY KEY (`Name`);ALTER TABLE $table MODIFY 'Name' varchar(50) NOT NULL AUTO_INCREMENT;";
  $wpdb->query($sql);
}

function student_data_deactivate(){
	global $wpdb;
	global $table_prefix;
	$table=$table_prefix.'student_data';
	$sql= "DROP TABLE $table";
  $wpdb->query($sql);
}

add_action( 'admin_menu', 'student_data_menu' );

function student_data_menu(){
	add_menu_page('sstudent_data','student_data',8,__FILE__,'student_data_list');
}

function student_data_list(){
	include('student_data_list.php');
}
?>
