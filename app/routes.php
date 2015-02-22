<?php
$f3->route('GET /', 'CMS->Show');
$f3->route('GET /captcha', 'CMS->captcha');
$f3->route('GET /SignUp', 'CMS->Show');
$f3->route('POST /SignUp', 'CMS->SignUp');
?>
