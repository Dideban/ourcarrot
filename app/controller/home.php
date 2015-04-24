<?php
$post = new Post();
$user = new User();
$user->isLogin($f3);
$post->SubmitPost($f3);
$post->GetPost($f3);
$post->GetComment($f3);
?>