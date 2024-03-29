<?php


namespace Core;


class DataBinder implements DataBinderInterface
{

    /**
     * @param $formData
     * @param $className
     * @return mixed
     * @throws \ReflectionException
     */
    public function bind($formData, $className)
    {
        $classInfo = new \ReflectionClass($className);
        $object = new $className;
        foreach($formData as $key => $value){
            $methodName = 'set' . implode('',
                    array_map(function($el){ return ucfirst($el);},explode('_',$key)));
            if(method_exists($object,$methodName)){
                $object->$methodName($value);
            }
        }
        return $object;
    }

}