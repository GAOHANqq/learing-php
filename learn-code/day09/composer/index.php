<?php

require 'vendor/autoload.php';

new Aci\Foo\Cat;
new Root\Dog;
new Sys\Src\Bar\Human;
new Program\Bar\Person;

new Program\Zhang;
new Program\LiSi;
	//classmap时每实例化一次,就要重新composer install

func1();