<?php
$db['hostname'] = 'localhost';
$db['username'] = 'root';
$db['password'] = '';
$db['database'] = 'myrecruitboarddb';


$base_path = '/var/www/html/abc/dbscripts';

$pid  = $base_path . '\\run.pid'  ;
$state = json_decode(file_get_contents($pid ));
if($state->state == 'begin'){
	 exit;
}


$config = $base_path . '\\my.cnf'  ;
$source  = $base_path . '\\tables.cnf'  ;
$date = date('dmy') ;
$folder = $base_path . '\\' . $date ;

if (!file_exists($folder)) {
    mkdir($folder, 0777, true);
}


$tables = json_decode(file_get_contents($source ));
$table = '';
foreach ($tables as $k => $v){
	if($v->export and $v->lastDone != $date) {
		$table = $k;
		break;
	}
}

if(!empty($table)){ 
	$file = $folder . '\\' . $table . '.sql' ; 
	$command = $base_path . '\\'. "mysqldump.exe --defaults-file=$config   -e  -h{$db['hostname']} {$db['database']} $table >  $file";
 	system($command);
	$tables->$table ->lastDone = $date ;
	file_put_contents('tables.cnf',json_encode($tables)) ;
	
	$state->state = 'end' ;	
	$state->table = $table ;
	$state->time = date('r') ;
	file_put_contents('run.pid',json_encode($state)) ;
}
else{ 

	
	$archive_name = $base_path .'\\'. $date. '.tar';
	$dir_path = $base_path .'\\'. $date;  
	if (!file_exists($archive_name.'.gz')) {
		
		$state->state = 'begin' ;	
		$state->table = 'db compress' ;
		$state->time = date('r') ;
		file_put_contents('run.pid',json_encode($state)) ;
	
			
		$archive = new PharData($archive_name);
		$archive->buildFromDirectory($dir_path); 
		
		$state->state = 'end' ;	
		$state->table = 'db compress' ;
		$state->time = date('r') ;
		file_put_contents('run.pid',json_encode($state)) ;
				
		$archive->compress(Phar::GZ);
		@unlink($archive_name); 

	
 
			
	}else{/*
		$archive_name = $base_path .'\\register_images_'. $date. '.tar';
		$dir_path =str_replace('dbscripts','register_images',$base_path) ; 
		if (!file_exists($archive_name.'.gz')) { 
			$state->state = 'begin' ;	
			$state->table = 'register_images compress' ;
			$state->time = date('r') ;
			file_put_contents('run.pid',json_encode($state)) ;
				
			$archive = new PharData($archive_name);
			$archive->buildFromDirectory($dir_path); 
			$archive->compress(Phar::GZ);
			@unlink($archive_name); 
			$state->state = 'end' ;	
			$state->table = 'register_images compress' ;
			$state->time = date('r') ;
			file_put_contents('run.pid',json_encode($state)) ;				
		}
		@unlink($archive_name); 
	*/}
	@unlink($archive_name);  
	

}
 
?>