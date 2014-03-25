<a href="<?php echo $base_url; ?>mods/generate_brewer_scoresheets.php" 
   title="Download Your Scoresheets" 
   id="generate_scoresheets" 
   class="data">Download Your Scoresheets</a>

<?php
include(DB.'brewer.db.php');
$zipfilenamne=$_SESSION['contestName']+ '_' + $row_brewer['brewerFirstName'] + '_' + $row_brewer['brewerLastName'] + '.zip';
Print_r ($_SESSION);
echo $zipfilename;
?>
