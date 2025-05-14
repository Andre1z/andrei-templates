<?php
class DB {
    private static $instance = null;
    private $pdo;

    private function __construct() {
        // Se asume que el archivo blog.db se encuentra en la carpeta db/
        $this->pdo = new PDO('sqlite:' . __DIR__ . '/../db/blog.db');
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    // Devuelve la instancia única de la conexión
    public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new DB();
        }
        return self::$instance;
    }

    // Devuelve el objeto PDO
    public function getConnection() {
        return $this->pdo;
    }
}