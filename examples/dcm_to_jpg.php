#!/usr/bin/php
<?PHP
#
# Creates a jpeg and jpeg thumbnail of a DICOM file 
#

require_once('../class_dicom.php');

$file = (isset($argv[1]) ? $argv[1] : '');

if(!$file) {
  print "USAGE: ./dcm_to_jpg.php <FILE>\n";
  exit;
}

if(!file_exists($file)) {
  print "$file: does not exist\n";
  exit;
}

$d = new dicom_convert;
$d->file = $file;
$d->dcm_to_tn();

system("ls -lsh $file*");

?>