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

function _bcb_all_participants($num)
{
 global $wpdb;

$allusers = $wpdb->get_results("SELECT DISTINCT meta_value FROM $wpdb->postmeta 
				WHERE post_id >= ".$num." AND meta_key='user_attending'");
		$totalCount = count($allusers);
		print "<h2>Total number of Registered participants is $totalCount</h2><br/>";
		
		$allAttendees = "abc'";
		foreach ($allusers as $attendee) {			
			$allAttendees = $attendee->meta_value."','".$allAttendees;
		}		
		$allAttendees = "'".$allAttendees;
		$allUserDetails = $wpdb->get_results("SELECT * FROM $wpdb->users WHERE user_login IN ($allAttendees) order by display_name");
print "<style>body,td{font-family:tahoma,verdana;font-size:12px;}</style><table border='1'>"		;

$xyz=0;
		foreach ($allUserDetails as $users) {
			$fname = get_usermeta($users->ID, 'first_name');
			$lname = get_usermeta($users->ID, 'last_name');
			print "<tr><td>". ++$xyz ;
			print " </td><td> ".t_authlink($users->user_login, $users->display_name);
			print "</td><td>".$fname." ".$lname;
			
			print " </td><td> ".$users->user_email;
			print " </td><td> ".$users->user_registered;
print " </td><td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";

			print "</td></tr>";
			}			
		print "</table>";
}

function dprint_r($arr)
{
	global $DEBUG;

	if($DEBUG) print_r($arr);
}

function get_nicename($id)
{
	global $wpdb;
	  $rsa= $wpdb->get_var("SELECT display_name  FROM $wpdb->users WHERE id = $id");
return $rsa;
}

function t_authlink($author,$hyperlinktext=NULL)
{
	
	if($hyperlinktext==NULL || empty($hyperlinktext) ) $hyperlinktext=$author;
	return "<a href=\"".get_settings('home')."/author/$author\">$hyperlinktext</a>";
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
	<h1>All Attendees in BCB</h1>
		<div id="authorlist">
		<?php 
			if (function_exists('_bcb_all_participants')) {
				_bcb_all_participants("8088");
			}
		?>
		<?php
		// function t2_authlink($author,$hyperlinktext=NULL)
		// {
			
			// if($hyperlinktext==NULL || empty($hyperlinktext) ) $hyperlinktext=$author;
			// return "<a href=\"".get_settings('home')."/author/$author\">$hyperlinktext</a>";
		
		// }
	
		// $allusers = $wpdb->get_results("SELECT DISTINCT meta_value FROM $wpdb->postmeta 
				// WHERE post_id >= 262 AND meta_key='user_attending'");
		// $totalCount = count($allusers);
		// print "<h2>Total number of Registered BCB9 participants is $totalCount</h2><br/>";
		// foreach ($allusers as $attendee) {
			// echo $comm.t2_authlink($attendee->meta_value);
			// $comm=", ";
		// }
	?>
       	<?php 
		//if (function_exists('wp_all_authors')) { 
		?>
		<?php 
		//wp_all_authors('show_fullname=1&optioncount=0&hide_empty=0&exclude_admin=1'); 
		?><?php 
		//} 
		?>
		</div>
	</div>
	
<?php //include(TEMPLATEPATH."/l_author_sidebar.php");?>

<?php //include(TEMPLATEPATH."/r_sidebar.php");?>

</div>

<!-- The main column ends  -->

<?php //get_footer(); ?>
