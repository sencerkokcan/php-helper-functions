<?php

function slugify($text){
    $text = strtolower(trim($text));
    $text = preg_replace('/[^a-z0-9-]/','-',$text);
    $text = preg_replace('/-+/','-',$text);
    return trim($text,'-');
}

function randomToken($length = 32){
    return bin2hex(random_bytes($length/2));
}

function jsonResponse($data){
    header('Content-Type: application/json');
    echo json_encode($data);
    exit;
}
