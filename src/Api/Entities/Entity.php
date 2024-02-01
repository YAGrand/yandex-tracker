<?php

namespace BugrovWeb\YandexTracker\Api\Entities;

use ReflectionClass;

class Entity
{

    function __construct(array $fromArray = null)
    {
        if($fromArray){
            $this->applyArray($fromArray);
        }
    }

    protected function applyArray(array $data):self
    {
        $reflection = new ReflectionClass(static::class);
        foreach($data as $propertyName=>$propertyValue){
            if(!$reflection->hasProperty($propertyName)){
                $this->{$propertyName} = $propertyValue;
                continue;
            }
            $property = $reflection->getProperty($propertyName);
            if(($property&&$property->getType()->isBuiltin())||!$property){
                $this->{$property->getName()} = $propertyValue;
            }else{
                $type = $property->getType()->getName();
                $this->{$property->getName()} = new $type($propertyValue);
            }
        }
        return $this;
    }

    public function __call($name, $arguments)
    {
        $propertyName = strtolower(substr($name, 3, 1)).substr($name, 4);
        if(isset($this->$propertyName)){
            return $this->$propertyName;
        }
        return null;
    }
}