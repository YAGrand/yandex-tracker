<?php

namespace BugrovWeb\YandexTracker\Api\Entities;

use BugrovWeb\YandexTracker\Api\Client;
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

    /**
     * Experemental! Refill entity from Yandex.Tracker
     *
     * @return $this
     */
    public function refillEntity()
    {
        return $this->applyArray(Client::getInstance()->prepareRequest('GET', $this->getSelf(), '')->getResponse());
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