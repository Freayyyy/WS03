class Database
{
public $conn;

public function __construct($config)
{
$dsn = "mysql:host={$config['host']}; port={config['port']}; dbname={$config['dbname']}";
$option = [PDO::ATTR_ERRORMODE => PDO::ERRORMODE_EXCEPTION];

try{
$this-> = new PDO($dsn, $config['username'],
$config['password']);
} catch (PDOException $e){
throw new Exception ("Database connection Failed: {$e -> getMessage()}");
}
}
}