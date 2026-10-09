<?php
//File: test_age.php
require_once "Validator.php";

//Test Case 1: nama valid
try {
    $result = validateName("Ning Inge Halimah Silva");
    echo "PASS: Nama Ning Inge Halimah Silva diterima\n";
} catch (Exception $e) {
    echo "FAIL : Nama Ning Inge Halimah Silva . Error: " . $e->getMessage() . "\n";
}

// Test Case 2: nama angka
try {
    $result = validateAge("Inge123");
    echo "FAIL : Nama Inge123 seharusnya ditolak\n";
} catch(Exception $e){
    echo "PASS : Nama Inge123 ditolak. Error: " . $e->getMessage() . "\n";
}

// Test Case 2: nama kosong
try {
    $result = validateAge(" ");
    echo "FAIL : Nama seharusnya ditolak\n";
} catch(Exception $e){
    echo "PASS : Nama tidak boleh kosong. Error: " . $e->getMessage() . "\n";
}