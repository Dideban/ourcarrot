<?php
$f3 = require('lib/base.php');
$f3->config('config.ini');

$f3->route('GET /',
    function() {
		$view= new View();
		echo $view->render('home.php');
    }
);
$f3->run();
?>