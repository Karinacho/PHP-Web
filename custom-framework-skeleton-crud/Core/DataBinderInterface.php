<?php


namespace Core;


interface DataBinderInterface
{
 //get data from form and take them to some class
    public function bind($formData,$className);

}