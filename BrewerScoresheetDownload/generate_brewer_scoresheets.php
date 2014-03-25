<?php
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
	//do {
	//for each entry
	//$zip->addFile('/scoresheets/' + $row_log['id'] + '.pdf');
	$entryNum = sprintf("%04s",$row_log['id']);
	$zip->addFile("../scoresheets/".$entryNum.".pdf", $entryNum.".pdf");
	//} while ($row_log = mysql_fetch_assoc($log));

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
