<?php
$f3->route('GET /', 'CMS->Show');
$f3->route('POST /', 'CMS->Post');
$f3->route('POST /Home', 'CMS->Post');
$f3->route('GET /SignOut', 'CMS->Show');
$f3->route('GET /Home', 'CMS->Show');
$f3->route('GET /captcha', 'CMS->captcha');
$f3->route('GET /SignUp', 'CMS->Show');
$f3->route('POST /SignUp', 'CMS->SignUp');
$f3->route('GET /SignIn', 'CMS->Show');
$f3->route('POST /SignIn', 'CMS->SignIn');
$f3->route('GET /UserCabin', 'CMS->Show');
$f3->route('POST /UserCabin', 'CMS->UserCabin');
?>
