<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Password
{
    public function __construct()
    {
        // Load necessary libraries or configurations here
    }

    public function hash($password)
    {
        return password_hash($password, PASSWORD_BCRYPT);
    }

    public function verify($password, $hash)
    {
        return password_verify($password, $hash);
    }
}
