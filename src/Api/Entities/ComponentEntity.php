<?php

namespace BugrovWeb\YandexTracker\Api\Entities;

/**
 * Комментарий
 * 
 * @method string getSelf()
 * @method int getId()
 * @method int getVersion()
 * @method string getName()
 * @method array getQueue()
 * @method string getDescription()
 * @method array getLead()
 * @method bool getAssignAuto()
 */
class ComponentEntity extends Entity
{
    protected ?string $self;
    protected ?int $id;
    protected ?int $version;
    protected ?string $name;
    protected ?QueueEntity $queue;
    protected ?string $description;
    protected ?UserEntity $lead;
    protected ?bool $assignAuto;
}