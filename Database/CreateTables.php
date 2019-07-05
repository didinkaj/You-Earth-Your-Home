<?php

namespace DB;

use Core\App;
use PDOException;


Class CreateTables
{
    public $db;

    public $schema;

    /**
     * CreateTables constructor.
     * @throws \Exception
     */
    public function __construct()
    {
        $this->db = App::get('database');
        $this->schema = new Schema();

    }

    /**
     * create users table
     *
     */
    public function users()
    {

        try {

            $sql = "CREATE TABLE IF NOT EXISTS users (
            {$this->schema->primaryKey()},
            name VARCHAR(100) NOT NULL,
            sex VARCHAR(20) NOT NULL,
            age INTEGER  NOT NULL,
            email VARCHAR(50) NOT NULL UNIQUE ,
            address VARCHAR(255) NOT NULL,
            phone_number BIGINT NOT NULL,
            password VARCHAR(100),
            reg_date TIMESTAMP
        )";

            $this->db->exec($sql);

            echo "Users table created successfully <br/>";

        } catch (PDOException $exception) {
            die($sql . "<br>" . $exception->getMessage());
        }
    }

    /**
     *delete users table
     */
    public function dropUsers()
    {

        $sql = "DROP TABLE IF EXISTS users ";

        $this->db->exec($sql);
    }

    /**
     *create the events table
     */
    public function events()
    {
        try {

            $sql = "CREATE TABLE IF NOT EXISTS events (
            {$this->schema->primaryKey()},
            name VARCHAR(255) NOT NULL,
            event_description VARCHAR(255) NOT NULL,
            image VARCHAR(255)  NULL,
            date VARCHAR(20) NOT NULL,
            user_id BIGINT  NOT NULL,
            reg_date TIMESTAMP
        )";

            $this->db->exec($sql);

            echo "events table created successfully <br/>";

        } catch (PDOException $exception) {
            die($sql . "<br>" . $exception->getMessage());
        }

    }


    /**
     *delete events table
     */
    public function dropEvents()
    {

        $sql = "DROP TABLE IF EXISTS events ";

        $this->db->exec($sql);
    }

    /**
     *create the event users table
     */
    public function eventUsers()
    {
        try {

            $sql = "CREATE TABLE IF NOT EXISTS event_users (
            {$this->schema->primaryKey()},
            user_id BIGINT NOT NULL,
            event_id BIGINT NOT NULL,
            reg_date TIMESTAMP
        )";

            $this->db->exec($sql);

            echo "events booked successfully <br/>";

        } catch (PDOException $exception) {
            die($sql . "<br>" . $exception->getMessage());
        }

    }

    /**
     *delete events table
     */
    public function dropEventUsers()
    {

        $sql = "DROP TABLE IF EXISTS event_users ";

        $this->db->exec($sql);
    }

}


