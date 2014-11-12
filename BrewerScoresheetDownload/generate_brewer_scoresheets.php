<?php
/*
<<<<<<< HEAD
 * Module: 		generate_brewer_scorehseets.php
 * Description:	This module will generate the zip file and download it for the user.
 * Info:
 *
 * Author:		Jeremy Wickham
 *		 		jwickham@gmail.com
 *
 * Date Created: March 25, 2014
 * Audit Trail:
 * 
 *		March 26, 2014 - Jeremy Wickham
 *		Added authoring info in at the top of the file.
 */

=======
 * Module: 	generate_brewer_scorehseets.php
 * Description:	This module will generate the zip file and download it for the user. 
 * Info:
 *
 * Author:	Jeremy Wickham
 *		jwickham@gmail.com
 *
 * Date Created: March 25, 2014
 * Audit Trail: 
 *		March 26, 2014 - Jeremy Wickham
 *		Added authoring info in at the top of the file. 
 */
 
>>>>>>> origin/master
require('../paths.php');
require(CONFIG.'bootstrap.php');

$zip = new ZipArchive;

$zipfilename=$_SESSION['contestName']."_".$_SESSION['brewerFirstName']."_".$_SESSION['brewerLastName'].".zip";

$zipname=$zipfilename;
// 	Print_r ($_SESSION);
// 	print($zipfilename);
// 	$contestName = $_SESSION['contestName'];
// 	echo $contestName;
// 	Print_r($row_log);
if($zip->open($zipname, ZIPARCHIVE::CREATE) == TRUE) {
	do {
	//for each entry
	$entryNum = sprintf("%04s",$row_log['id']);
	$zip->addFile("../scoresheets/".$entryNum.".pdf", $entryNum.".pdf");
	} while ($row_log = mysql_fetch_assoc($log));
	// close zip file
	$zip->close();
} else {
	echo 'failed to archive scoresheets';
}
// This one works
header('Content-type: application/zip');
header('Content-Disposition: attachment;filename="'.$zipname.'"');
header('Pragma: no-cache');
header('Expires: 0');
readfile($zipname);

// dunno about this one
// header("Content-type: application/zip");
// header('Content-Disposition: attachment; filename="'.basename($zipname).'"');
// header('Content-Description: File Transfer');
// header("Expires: 0");
// readfile("$zipname");
?>
