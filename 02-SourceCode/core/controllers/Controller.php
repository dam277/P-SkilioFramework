<?php
include_once __DIR__."/../../controllers/HomeController.php";

/**
 * Manage the controllers base
 * 
 * Define which controller must be called
 */
abstract class Controller
{
    public static array $permissions;     // Permissions to access some page
    protected string $folder, $file;      // Folder and file of the page to display

    /**
     * Execute a function
     * 
     * @param callable => Callable function in the class
     * @param folder => Folder of the view
     * @param file => View file
     * @param controller => controller class
     * 
     * @return function => return the content of a function
     */
    protected static function Display(Request $request, $controller)
    {
        // Set the folder and the file if set
        isset($request->route->folder) ? $controller->folder = $request->route->folder : null;
        isset($request->route->file) ? $controller->file = $request->route->file : null;
        
        if (isset($controller)) 
        {
            return call_user_func(array($controller, $request->route->action["function"]));
        }
        else
        {
            return call_user_func($request->route->action["function"]);
        }
    }
}
?>