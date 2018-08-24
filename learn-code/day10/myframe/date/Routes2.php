<?php

$app->get('/','App\\Cnotroller\\Home:index');
$app->get('/user/add','App\\Cnotroller\\User:add');

$app->post('/user/add/submit','App\\Cnotroller\\User:addSubmit');