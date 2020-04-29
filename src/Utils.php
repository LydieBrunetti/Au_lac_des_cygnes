<?php

namespace App;

class Utils
{
    /**
     * Performs a redirection to the specified location and then exits
     *
     * @param string $location
     * @return void
     */
    public static function redirect(string $location): void
    {
        header('Location: ' . $location);
        exit;
    }
}

