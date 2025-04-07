<?php
session_start();
if ($_SERVER['HTTP_HOST'] == 'localhost') {
    define("BASE_URL", "http://localhost/Library-Management-system/LMS/");
    define("DIR_URL", $_SERVER['DOCUMENT_ROOT'] . "/Library-Management-system/LMS/");

    define("SERVER_NAME", "localhost");
    define("USERNAME", "root");
    define("PASSWORD", "");
    define("DATABASE", "lms");
} else {
    define("BASE_URL", "https://LMS.com");
    define("DIR_URL", $_SERVER['DOCUMENT_ROOT']);

    define("SERVER_NAME", "");
    define("USERNAME", "");
    define("PASSWORD", "");
    define("DATABASE", "");
}
