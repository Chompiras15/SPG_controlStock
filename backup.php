<?php

 require_once('includes/load.php');
 if (!$session->isUserLoggedIn(true)) { redirect('index.php', false);}
page_require_level(1);
$host="localhost";
$username="root";
$password="";
$database_name="sgp_logisticstock";

$conn=mysqli_connect($host,$username,$password,$database_name);

$tables=array();
$sql="SHOW TABLES";
$result=mysqli_query($conn,$sql);

while($row=mysqli_fetch_row($result)){
$tables[]=$row[0];
}

$backupSQL="";
foreach($tables as $table){
$query="SHOW CREATE TABLE $table";
$result=mysqli_query($conn,$query);
$row=mysqli_fetch_row($result);
$backupSQL.="\n\n".$row[1].";\n\n";

$query="SELECT * FROM $table";
$result=mysqli_query($conn,$query);

$columnCount=mysqli_num_fields($result);

for($i=0;$i<$columnCount;$i++){
while($row=mysqli_fetch_row($result)){
$backupSQL.="INSERT INTO $table VALUES(";
for($j=0;$j<$columnCount;$j++){
$row[$j]=$row[$j];

if(isset($row[$j])){
$backupSQL.='"'.$row[$j].'"';
}else{
$backupSQL.='""';
}
if($j<($columnCount-1)){
$backupSQL.=',';
}
}
$backupSQL.=");\n";
}
}
$backupSQL.="\n";
}

if(!empty($backupSQL)){
$backup_file_name=date_backup().'_'.$database_name.'_backup_'.'.sql';
$fileHandler=fopen($backup_file_name,'w+');
$number_of_lines=fwrite($fileHandler,$backupSQL);
fclose($fileHandler);

//header("location: $backup_file_name");
header('Content-Description: File Transfer');
header('Content-Type: application/octet-stream');
header('Content-Disposition: attachment; filename='.basename($backup_file_name));
header('Content-Transfer-Encoding: binary');
header('Expires: 0');
header('Cache-Control: must-revalidate');
header('Pragma: public');
header('Content-Length: '.filesize($backup_file_name));
// ob_clean(); 
// flush();
readfile($backup_file_name);
}