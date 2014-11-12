<<<<<<< HEAD
<?php
/*
 * Module: 	      brewer_scorehseets.php
 * Description:	This module displays the link to the user.
 * Info:
 *
 * Author:	Jeremy Wickham
 *		      jwickham@gmail.com
 *
 * Date Created: March 25, 2014
 * 
 * Audit Trail: 
 *		March 26, 2014 - Jeremy Wickham
 *		Added authoring info in at the top of the file. 
 *
 * To do: See if .zip file exists here, if not, then generate the zip file. 
 */

include(DB.'brewer.db.php');
if ((judging_date_return() == 0) && ($entry_window_open == 2) && ($registration_open == 2) && ($judge_window_open == 2) && ($_SESSION['prefsDisplayWinners'] == "Y") && (judging_winner_display($delay))) $show_scores = TRUE; else $show_scores = FALSE;
?>
<br/>


<?php 
//echo $show_scores;
//if($show_scores == TRUE || $row_log['userLevel'] == 0) {
if($show_scores == TRUE) {
?>
<a href="<?php echo $base_url; ?>mods/generate_brewer_scoresheets.php" 
   title="Download Your Scoresheets" 
   id="generate_scoresheets" 
   class="button">Download Your Scoresheets</a><br/><br/>
   <b>Note: </b> This is a modification we have made to the software. If you have an issue downloading, please email me at jwickham@gmail.com and I'll help you out. I'm attempting to do this as seemless as possible.<br/> 
   Thank you for particpating in War of the Wort! Cheers!  
<?php
}
?>
=======
<?php
/*
 * Module: 	      brewer_scorehseets.php
 * Description:	This module displays the link to the user.
 * Info:
 *
 * Author:	Jeremy Wickham
 *		      jwickham@gmail.com
 *
 * Date Created: March 25, 2014
 * 
 * Audit Trail: 
 *		March 26, 2014 - Jeremy Wickham
 *		Added authoring info in at the top of the file. 
 *
 * To do: See if .zip file exists here, if not, then generate the zip file. 
 */

include(DB.'brewer.db.php');
?>
<br/>
<a href="<?php echo $base_url; ?>mods/generate_brewer_scoresheets.php" 
   title="Download Your Scoresheets" 
   id="generate_scoresheets" 
   class="button">Download Your Scoresheets</a>
>>>>>>> origin/master
