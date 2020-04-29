<?php
require_once 'vendor/autoload.php';

use App\Utils;
use App\Session;


Session::reset();

Utils::redirect('index.php');