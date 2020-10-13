<?php
class Database{
 
    /**
     * database connection object
     * @var \PDO
     */
    protected $pdo;
 
    /**
     * Connect to the database
     */
    public function __construct(\PDO $pdo)
    {
        $this->pdo = $pdo;
        $this->pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    }
 
    /**
     * Return the pdo connection
     */
    public function getPdo()
    {
        return $this->pdo;
    }
 
 
    public function getAllRecords($tableName, $fields='*', $cond='', $orderBy='', $limit='')
    {
        //echo "SELECT  $tableName.$fields FROM $tableName WHERE 1 ".$cond." ".$orderBy." ".$limit;
        //print "<br>SELECT $fields FROM $tableName WHERE 1 ".$cond." ".$orderBy." ".$limit;
        $stmt = $this->pdo->prepare("SELECT $fields FROM $tableName WHERE 1 ".$cond." ".$orderBy." ".$limit);
        //print "SELECT $fields FROM $tableName WHERE 1 ".$cond." ".$orderBy." " ;
        $stmt->execute();
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $rows;
    }
     
     

    public function getQueryCount($tableName, $field, $cond='')
    {
        $stmt = $this->pdo->prepare("SELECT count($field) as total FROM $tableName WHERE 1 ".$cond);
        try {
            $stmt->execute();
            $res = $stmt->fetchAll(PDO::FETCH_ASSOC);
           
            if (! $res || count($res) != 1) {
               return $res;
            }
            return $res;
        } catch (\PDOException $e) {
            throw new \RuntimeException("[".$e->getCode()."] : ". $e->getMessage());
        }
    }
     

    /**
     * Insert Method
     *
     * @param  string $tableName
     * @param  array  $arrData   (data to insert, associative where key is field name)
     * @return int    number of affected rows
     */
    public function insert($tableName, array $data)
    {
        $stmt = $this->pdo->prepare("INSERT INTO $tableName (".implode(',', array_keys($data)).")
            VALUES (".implode(',', array_fill(0, count($data), '?')).")"
        );
        try{
            $stmt->execute(array_values($data));
            return $stmt->rowCount();
        } catch (\PDOException $e) {
            throw new \RuntimeException("[".$e->getCode()."] : ". $e->getMessage());
        }
    }
     
}
?>