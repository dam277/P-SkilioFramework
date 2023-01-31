<?php
class Router
{
    public static array $routes;                            // Array of all the routes

    /**
     * Add a route in the array of routes
     */
    public static function AddRoute(Route $route)
    {
        self::$routes[] = $route;
    }

    /**
     * Get a route by name
     * 
     * @param name => Name of the route
     */
    public static function GetRouteByName(string $name)
    {

    }
}
?>$