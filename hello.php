<?php

/**
 * Created by PhpStorm.
 * User: User
 * Date: 12/29/2017
 * Time: 11:21 PM
 */
class hello
{
    function main()
    {
        echo "phpstrom code editor is good";

        $this->greeting("Git");
    }

    function greeting($name)
    {
        echo "Welcome " . $name;
    }

    function display()
    {
        echo "Hello Hello";
    }

    function sqr($x)
    {
        echo $x * $x;
    }

}