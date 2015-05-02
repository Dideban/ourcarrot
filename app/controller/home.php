<?php
$post = new Post();
$user = new User();
$comment = new Comment();
$user->isLogin($f3);
$post->SubmitPost($f3);
$post->GetPost($f3);
$comment->SubmitComment($f3);
$comment->GetComment($f3);
?>