<?php


namespace ChatApp\Templates;
use  ChatApp\Config\Config;

class Template{

	public function main_header($title='ChatApp'){
	
		echo '
			<!DOCTYPE html>

		<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>'.$title.'</title>
				<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>
<body>

		';
	}


	
	public function main_footer(){

		echo '<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>';
	}

	public function main_navbar($login=false){

		echo '
		<nav class="navbar navbar-expand-lg  navbar-light bg-light">
<div class="container-fluid" style="margin-right: 10px;">
    <a href="' . Config::$home . '/" class="nav-brand h3" style="text-decoration:none; margin:1px;">  
	ChatApp
</a>
	<ul class="nav justify-content-end">';
		
		if($login == true){
			echo '<li class="nav-item">';
			echo '<a href="'.Config::$home.'/user/logout.php">logout</a>';
			echo '</li>';

		}

	echo '</ul>';
echo '</div>
</nav>
';
	}

	public static function test(){
		return 'template working';
	}
}
?>


