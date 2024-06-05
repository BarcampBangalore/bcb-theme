<?php
/**
 * Used to be the page which displayed the registration form.
 *
 * This file is no longer used in WordPress and is
 * deprecated.
 *
 * @package WordPress
 * @deprecated Use wp_register() to create a registration link instead
 */

require('./wp-load.php');

if ( ! current_user_can( 'manage_options' ) ) {
	return '';
}
 //get_header(); ?>

<style>
#authorlist li{ padding:10px;border-bottom:1px solid #ccc;margin-bottom:3px;list-style-type: none}
#authorlist img{ border:1px solid #999;clear:none}

#authorlist ol { list-style-type: none } 
#authorlist ul { list-style-type: none }
</style>

<div id="content">

	<div id="contentleft">
	<h1>BCB11 Schedule</h1>
		<div id="authorlist">
	 
		<?php


  $sessionz = $wpdb->get_results("SELECT DISTINCT post_id, count(*) as c FROM $wpdb->postmeta 
				   WHERE post_id >= 8393 AND meta_key='user_attending' group by post_id   order by c DESC");
	$sessionz2 = $wpdb->get_results(" SELECT * FROM $wpdb->posts wposts WHERE wposts.ID >= 8393
	 AND  wposts.post_status = 'publish' AND wposts.post_type = 'post' ORDER BY wposts.post_date DESC");
$wpdb->error;

		echo $totalCount = count($sessionz);


?><table border=1> <?php

function remove_item_by_value($array, $val) {
		for($i=0; $i< count($array);$i++)
		{
			if($array[$i]->ID == $val){
				//echo "Removed ID $val<br/>";
				unset($array[$i]);
				break;
			}
		}
		$i = 0;
		
		$array = array_values($array);
		return $array;
}

function get_item_by_value($array, $val) {
		for($i=0; $i< count($array);$i++)
		{
			if($array[$i]->ID == $val){
				//echo "Removed ID $val<br/>";
				//unset($array[$i]);
			  return $array[$i];
			}
		}
		return "";
		
}


	 	 foreach($sessionz as $sess) { $counter++;
 echo "<tr><td>$counter</td><td>$sess->post_id</td><td>";
echo $wpdb->get_var("SELECT DISTINCT post_title FROM wp_posts where ID=$sess->post_id LIMIT 1");
echo "</td><td>";
$curpost = get_item_by_value($sessionz2, $sess->post_id);
echo $wpdb->get_var("SELECT DISTINCT user_email FROM wp_users where ID=$curpost->post_author LIMIT 1");
echo "</td><td>$sess->c </td></tr>";
$sessionz2 = remove_item_by_value($sessionz2, $sess->post_id);
	
 }

	 	 foreach($sessionz2 as $sess) { $counter++;
 echo "<tr><td>$counter</td><td>$sess->ID</td><td>";
echo $sess->post_title;
echo $sess->post_author;
echo "</td><td>";
echo $wpdb->get_var("SELECT DISTINCT user_email FROM wp_users where ID=$sess->post_author LIMIT 1");
echo "</td><td>0</td></tr>";
 }


 
	?></table>
        
		</div>
	</div>
	
 

</div>
 
