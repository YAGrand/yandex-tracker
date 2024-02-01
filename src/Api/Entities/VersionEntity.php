<?php

namespace BugrovWeb\YandexTracker\Api\Entities;

/**
 * Комментарий
 * 
 * @method string getSelf()
 * @method int getId()
 * @method int getVersion()
 * @method string getName()
 * @method QueueEntity getQueue()
 * @method DateTime getStartDate()
 * @method DateTime getDueDate()
 * @method DateTime getReleasedAt()
 * @method bool getReleased()
 * @method bool getArchived()
 */
class VersionEntity extends Entity
{
    protected string $self;
    protected int $id;
    protected int $version;
    protected string $name;
    protected QueueEntity $queue;
    protected DateTime $startDate;
    protected DateTime $dueDate;
    protected DateTime $releasedAt;
    protected bool $released;
    protected bool $archived;
}