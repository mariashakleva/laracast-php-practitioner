<?php


class Connection
{

    //when you don't need an instance of an object, you can use/call a static method
    public  static function make($config)
    {
        try{
            return new PDO(
                $config['connection'].';dbname='.$config['name'],
                $config['username'],
                $config['password'],
                $config['options']
            );
        }catch(PDOException $e){
            // $e is an object, instance of PDOException
            die($e->getMessage());
        }
    }

}