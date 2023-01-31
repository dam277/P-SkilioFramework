<?php
Route::Post("/", function(){
    return "C'est une fonction anonyme";
});

Route::Post("/about", "HomeController@Contact");

Route::Post("/book", [HomeController::class, 'Home']);

// Route::Group("/admin", [AdminController::class, function()
// {
//     Route::Post("/Users", "Users");
//     Route::Post("/Books", "Books");
// }]);

// Route::Group("/admin", [AdminController::class, function()
// {
//  Route::Post("/Users", "Display");
//  Route::Post("/Books", "Books");
// }])->middleware([AccountMiddleware::class => ["first", "second"]]);
?>