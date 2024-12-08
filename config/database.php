<?php
// class Database {
//     private static $host = 'localhost';
//     private static $db_name = 'mvc_system';
//     private static $username = 'root';
//     private static $password = '';
//     private static $conn;

//     public static function connect() {
//         if (!self::$conn) {
//             try {
//                 self::$conn = new PDO("mysql:host=" . self::$host . ";dbname=" . self::$db_name, self::$username, self::$password);
//                 self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//             } catch (PDOException $e) {
//                 die("Connection failed: " . $e->getMessage());
//             }
//         }
//         return self::$conn;
//     }
// }

class Database {
    private static $host = 'localhost'; // Endereço do servidor PostgreSQL
    private static $db_name = 'postgres'; // Nome do banco de dados
    private static $username = 'postgres'; // Usuário do PostgreSQL
    private static $password = ''; // Senha do PostgreSQL
    private static $port = '5432'; // Porta padrão do PostgreSQL
    private static $conn;

    public static function connect() {
        if (!self::$conn) {
            try {
                self::$conn = new PDO(
                    "pgsql:host=" . self::$host . ";port=" . self::$port . ";dbname=" . self::$db_name,
                    self::$username,
                    self::$password
                );
                self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                die("Connection failed: " . $e->getMessage());
            }
        }
        return self::$conn;
    }
}
?>

