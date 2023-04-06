<?php
/*
 * Author: Sean Wilson
 * Date: 4/5/2023
 * Name: index.php
 * Description: The homepage for final project
 */
//load application settings
require_once ("application/config.php");

//load autoloader
require_once ("vendor/autoload.php");

//load the dispatcher that dissects a request URL
new Dispatcher();
