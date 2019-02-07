<?php include "db.php" ?>
<?php include "functions.php" ?>
<?php  

$sql = "SELECT * FROM data";  
$setRec = mysqli_query($conn, $sql);  
$column = '';  
$column = "name" . "\t" . "link" . "\t" ;  
$Data = '';  
  while ($row = mysqli_fetch_row($setRec)) {  
    $rowData = '';  
    foreach ($row as $value) {  
        $value = '"' . $value;  
        $rowData .= $value;  
    }  
    $Data .= trim($rowData) . "\n";  
}  
  
header("Content-type: application/octet-stream");  
header("Content-Disposition: attachment; filename=Detail.xlsx");  
header("Pragma: no-cache");  
header("Expires: 0");  

  echo ucwords($column) . "\n" . $Data;  
 ?> 
