<?php
/**
 * HelloWorld class
 *
 * @package  ShahariaAzam\GitHubActions\ForPHP
 */


namespace ShahariaAzam\HelloWorld;

/**
 * Class HelloWorld
 * @package ShahariaAzam\HelloWorld
 */
class HelloWorld
{
    /**
     * @var string
     */
    private $yourName;

    public function __construct($yourName)
    {
        $this->yourName = $yourName;
    }

    /**
     * @return string
     */
    public function greet()
    {
        private &mezua2="Hau mezu bat da";
        return sprintf("Hello world from " . $this->yourName);
    }
}
