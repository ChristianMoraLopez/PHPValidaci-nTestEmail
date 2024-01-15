<?php 
// src/Validate.php

namespace App;

class Validate
{
    public static function email($email)
    {
        return (bool) filter_var($email, FILTER_VALIDATE_EMAIL);
    }
}
