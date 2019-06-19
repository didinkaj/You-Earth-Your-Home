<?php

namespace DB;


use Exception;
use PDO;

class QueryBuilder
{
    public $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;

    }


    public function selectAll($table)
    {

        $statement = $this->pdo->prepare("select * from {$table}  ORDER BY reg_date DESC ");

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function insert($table, $parameters)
    {

        $sql = sprintf(
            'insert into %s (%s) values (%s)',
            $table,
            implode(',', array_keys($parameters)),
            ':' . implode(', :', array_keys($parameters)),
			);

        try {
            $statement = $this->pdo->prepare($sql);

            $statement->execute($parameters);

        } catch (Exception $e) {

            die(var_dump($e->getMessage()));

        }
    }


    /**
     * selects all specific row and specified columns from a given table
     *
     * @param $table
     * @param $whereParams
     * @param array $parameters
     * @return array|void
     */
    public function select($table, $whereParams, $parameters = ['*'])
    {
        $allowed = array("id","email");
        $items = [];

        foreach ($whereParams as $key => $value) {
            if (in_array($key, $allowed)) {
                $items[$key] = "$key=:$key";
            }
        }

        $sql = sprintf(
            'SELECT %s FROM  %s WHERE (%s)',
            implode(',', ($parameters)),
            $table,
            implode(',', $items)
        );


        try {
            $statement = $this->pdo->prepare($sql);

            $statement->execute($whereParams);

            return $statement->fetchObject();

        } catch (Exception $e) {
            var_dump($e->getMessage());
        }

    }

    /**
     * deletes records from a given table that meets the creteria
     *
     * @param $table
     * @param $parameters
     * @return bool
     */
    public function delete($table, $parameters)
    {
        $allowed = array("id");
        $items = [];

        foreach ($parameters as $key => $value) {
            if (in_array($key, $allowed)) {
                $items[$key] = "$key=:$key";
            }
        }

        $sql = sprintf(
            'DELETE FROM  %s where (%s)',
            $table,
            implode(',', $items)
        );


        try {
            $statement = $this->pdo->prepare($sql);

            return $statement->execute($parameters);

        } catch (Exception $e) {
            var_dump($e->getMessage());
        }


    }

    /**
     * updates a given table with given parameters
     *
     * @param $table
     * @param $parameters
     * @param $id
     * @return bool
     */
    public function update($table, $parameters, $id)
    {
        $items = [];

        foreach ($parameters as $key => $value) {
            $items[$key] = "$key=:$key";
        }

        $sql = sprintf(
            'UPDATE %s SET %s WHERE id = %s',
            $table,
            implode(',', $items),
            $id
        );

        try {
            $statement = $this->pdo->prepare($sql);

            $statement->execute($parameters);

            return true;

        } catch (Exception $e) {
            var_dump($e->getMessage());
        }

    }


    /**
     * execute a given query
     *
     * @param $query
     */
    public function exec($query)
    {
        $this->pdo->exec($query);
    }
}