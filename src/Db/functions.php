<?php

// Chemin absolu
require_once __DIR__ .'/../../Config/db.php';
/**
 * Create and return a new PDO instance based on the given parameters
 *
 * @param string $dsn
 * @param string $user
 * @param string $pass
 * @return PDO
 * @throws PDOException throw if connection failed
 */
function getPDOInstance(string $dsn = DSN, string $user = USER, string $pass = PASS): PDO
{
    try{
        $pdo = new PDO($dsn, $user, $pass);
    }catch(PDOException $e) {
        throw $e;
    };

    return $pdo;
}

?>