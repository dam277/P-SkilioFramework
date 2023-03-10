<?php
include_once __DIR__."/../../core/Controller.php";
include_once __DIR__."/../../models/tables/t_user.php";
include_once __DIR__."/../../models/repositories/User.php";

/**
 * Manage the user pages
 */
class UserController extends Controller
{
    /**
     * Page with all the users
     * 
     * @return content => Content of the page User.php with the variables set
     */
    public function Users()
    {
        // Get all users
        $usersArray = t_user::GetAll();

        // Set array of users
        $users = array();

        // Browse array to set objects of users
        foreach ($usersArray as $key => $actualUser) 
        {
            $user = new User($actualUser["idUser"], $actualUser["nickname"], $actualUser["password"], $actualUser["role"]);
            $users[] = $user;
        }

        // Get the view
        $view = View::Get($this->folder, $this->file);

        // Replace variables
        ob_start();
        eval('?>' . $view);
        $content = ob_get_clean();

        // Return the content of the page + variables set
        return $content;
    }

    /**
     * Display page User with the user selected by ID
     * 
     * @return content => Content of the page User.php with the variables set
     */
    public function User()
    {
        // Get the user by id
        $userArray = t_user::GetUserByIdUser($_GET["id"]);
        $user = new User($userArray["idUser"], $userArray["nickname"], $userArray["password"], $userArray["role"]);

        // Get the view
        $view = View::Get($this->folder, $this->file);

        // Replace variables
        ob_start();
        eval('?>' . $view);
        $content = ob_get_clean();
        
        // Return the content of the page + variables set
        return $content;
    }
}

?>