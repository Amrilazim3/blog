<?php 
namespace App\Services;

use App\services\Newsletter;

class ConvertKitNewsletter implements Newsletter
{
    public function subscribe(string $email, string $list = null)
    {   
        // subscribe the user with ConvertKit-specific
        // API requests.
        return "elmos world";
    }
}