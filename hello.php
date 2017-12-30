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

        $this->greeting("Robi Hasan");
    }

    function greeting($name)
    {
        echo "Welcome " . $name;
    }

    function sqr($x)
    {
        echo $x * $x;
    }

}