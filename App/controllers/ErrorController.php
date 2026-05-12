<?php

namespace App\Controllers;


class ErrorController
{

    public function notFound($message = "Page not found")
    {


        loadView('home', [
            'listings' => $listings
        ]);
    }
}
