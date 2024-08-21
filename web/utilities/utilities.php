<?php
// File: utility_functions.php

function isServicesPage()
{
    $currentPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    return $currentPath === '/services/' || $currentPath === '/services';
}

// คุณสามารถเพิ่มฟังก์ชันอื่น ๆ ที่ใช้ร่วมกันได้ที่นี่
