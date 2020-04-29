<?php

namespace App;

/**
 * Singleton session
 */
class Session
{
    private static $_instance = null;

    private function __construct()
    {
        session_start();
    }

    public static function getInstance(): ?session
    {
       if(self::$_instance == null){
        self::$_instance = new Session;
       }
       return self::$_instance;
    }

    /**
     * Envoie les paramètres value dans les champs key du tableau $_SESSION
     *
     * @param string $key
     * @param [type] $value
     * @return void
     */
    public function __set(string $key, $value): void
    {
        $_SESSION[$key] = $value;
    }

    /**
     * Récupère les paramètres du key de session
     *
     * @param string $key
     * @return void
     */
    public function __get(string $key)
    {
       return $_SESSION[$key];
    }

    /**
     * Vérifie si le champ key du tableau $_SESSION est vide ou non
     * S'il est vide, renvoie false ; s'il n'est pas vide renvoie true
     *
     * @param string $key
     * @return boolean
     */
    public function __isset(string $key) : bool
    {
        return !empty($_SESSION[$key]);
    }

    /**
     * Supprime la valeur dans le champ key du tableau $_SESSION
     *
     * @param string $key
     * @return void
     */
    public function __unset(string $key): void
    {
        unset($_SESSION[$key]);
    }

    /**
     * Supprime la session
     *
     * @return void
     */
    public function reset(): void
    {
        Session::getInstance();
        $_SESSION = [];
    }
}