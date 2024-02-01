<?php

namespace BugrovWeb\YandexTracker\Api\Entities;

/**
 * Комментарий
 * 
 * @method string getSelf()
 * @method int getId()
 * @method string getLongId()
 * @method string getText()
 * @method User getCreatedBy()
 * @method User getUpdatedBy()
 * @method DateTime getCreatedAt()
 * @method DateTime getUpdatedAt()
 * @method int getVersion()
 */
class CommentEntity extends Entity
{
    protected string $self;
    protected int $id;
    protected string $longId;
    protected string $text;
    protected UserEntity $createdBy;
    protected UserEntity $updatedBy;
    protected DateTime $createdAt;
    protected DateTime $updatedAt;
    protected int $version;
    protected string $type;
    protected string $transport;
}