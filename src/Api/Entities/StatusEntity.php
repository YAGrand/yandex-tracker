<?php

namespace BugrovWeb\YandexTracker\Api\Entities;

/**
 * Комментарий
 * 
 * @method string getSelf()
 * @method int getId()
 * @method int getVersion()
 * @method string getKey()
 * @method string getName()
 * @method string getDescription()
 * @method int getOrder()
 * @method string getType()
 */
class StatusEntity extends Entity
{
    protected string $self;
    protected int $id;
    protected int $version;
    protected string $key;
    protected string $name;
    protected string $description;
    protected int $order;
    protected string $type;
}