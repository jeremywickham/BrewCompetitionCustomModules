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

<a href="<?php echo $base_url; ?>mods/generate_brewer_scoresheets.php" 
   title="Download Your Scoresheets" 
   id="generate_scoresheets" 
   class="data">Download Your Scoresheets</a>

<?php

// $zipfilenamne=$_SESSION['contestName']+ '_' + $row_brewer['brewerFirstName'] + '_' + $row_brewer['brewerLastName'] + '.zip';
// Print_r ($_SESSION);
// echo $zipfilename;
?>
