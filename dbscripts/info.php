<?php

//phpinfo();

/*
$db['hostname'] = 'us-cdbr-azure-northcentral-a.cleardb.com';
$db['username'] = 'b45a46a766df94';
$db['password'] = '224a4d7df255c3b';
$db['database'] = 'myrecruitboarddb';

$base_path = 'D:\home\site\wwwroot\dbscripts';

if (!mysql_connect($db['hostname'], $db['username'], $db['password'])) {
    echo 'Could not connect to mysql';
    exit;
}
$sql = "SHOW TABLES FROM {$db['database']} ";
$result = mysql_query($sql);
$tables = array();
while ($row = mysql_fetch_row($result)) {
     
	$tables[$row[0]] = array('export' =>1, 'lastDone'=>'') ;
}
file_put_contents('tables.cnf',json_encode($tables)) ;
file_put_contents('run.pid',json_encode(array('state'=>'', 'time'=>'', 'table'=>''))) ;
*/

$base_path = '/var/www/html/abc/dbscripts';
$date = date('dmy') ;
$archive_name = $base_path .'\\'. $date. '.tar';
$dir_path = $base_path .'\\'. $date;

echo " $archive_name  $dir_path ";
$archive = new PharData($archive_name);
$archive->buildFromDirectory($dir_path); // make path\to\archive\arch1.tar
$archive->compress(Phar::GZ); // make path\to\archive\arch1.tar.gz
//unlink($archive_name); 

var_dump($archive) ;


?>