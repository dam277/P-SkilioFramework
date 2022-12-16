<?php
require_once(__DIR__."/../Database.php");
require_once(__DIR__."/ITable.php");

class t_user implements ITable
{
    /**
     * Get a specific user
     * 
     * @param id => Id of the user
     * 
     * @return array => User object
     */
    public static function GetUserByIdUser(int $idUser) : array
    {
        // Get specific user
        $userArray = Database::GetInstance()->QueryPrepareExecute
        (
            "SELECT * FROM t_user WHERE idUser = :id",
            [["param" => "id", "value" => $idUser, "type" => PDO::PARAM_INT]]
        );

        // Return a single user
        return $userArray[0];
    }

    /**
     * Get all the user of the db
     * 
     * @return array => User object
     */
    public static function GetAllUsers() : array
    {
        // Get all the users
        $usersArray = Database::GetInstance()->QuerySimpleExecute
        (
            "SELECT * FROM t_user"
        );
        
        // Return users
        return $usersArray;
    }
}
?>