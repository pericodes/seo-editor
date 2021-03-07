<?php


require_once 'vendor/autoload.php'; 



file_put_contents("output/index.html", (new \Twig\Environment(new \Twig\Loader\FilesystemLoader('app/views')))->load('base.html')->render());
