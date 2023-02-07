<?php
/**
 * Manage the views
 */
class View
{
    protected ?string $path;                 // Path of the view
    protected array $datas;                 // Datas sended to the view

    /**
     * View class constructor
     * 
     * @param path => Path of the view
     */
    public function __construct(?string $path = null)
    {
        $this->path = $path;
    }

    /**
     * Set datas to the view
     * 
     * @param datas => Array of datas
     */
    public function WithDatas(array $datas)
    {
        $this->datas = $datas;
        return $this;
    }

    /**
     * Parse the datas and display the view
     */
    public function Parse()
    {
        
    }
}
?>
<!-- 
// Return the content of a view
        return file_get_contents(__DIR__."/../pages/views/".$folder."/".$file); -->