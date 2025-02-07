<?php

namespace BugrovWeb\YandexTracker\Api\Entities;

/**
 * @method string getSelf()
 * @method string getId()
 * @method string getKey()
 * @method int getVersion()
 * @method string getSummary()
 * @method string getOriginalEstimation()
 * @method DateTime getStatusStartTime()
 * @method UserEntity getUpdatedBy()
 * @method array getStatusType()
 * @method string getSpent()
 * @method array getBoards()
 * @method array getType()
 * @method array getPriority()
 * @method array getPreviousStatusLastAssignee()
 * @method DateTime getCreatedAt()
 * @method UserEntity getCreatedBy()
 * @method int getCommentWithoutExternalMessageCount()
 * @method int getVotes()
 * @method int getCommentWithExternalMessageCount()
 * @method UserEntity getAssignee()
 * @method QueueEntity getQueue()
 * @method DateTime getUpdatedAt()
 * @method StatusEntity getStatus()
 * @method StatusEntity getPreviousStatus()
 * @method bool getFavorite()
 * @method VersionEntityCollection getFixVersions()
 */
class IssueEntity extends Entity
{
    protected string $self;
    protected string $id;
    protected string $key;
    protected ?int $version;
    protected ?string $summary;
    protected ?string $originalEstimation;
    protected ?DateTime $statusStartTime;
    protected ?UserEntity $updatedBy;
    protected ?array $statusType;
    protected ?string $spent;
    protected ?array $boards;
    protected ?array $type;
    protected ?array $priority;
    protected ?array $previousStatusLastAssignee;
    protected ?DateTime $createdAt;
    protected ?UserEntity $createdBy;
    protected ?int $commentWithoutExternalMessageCount;
    protected ?int $votes;
    protected ?int $commentWithExternalMessageCount;
    protected ?UserEntity $assignee;
    protected ?QueueEntity $queue;
    protected ?DateTime $updatedAt;
    protected ?StatusEntity $status;
    protected ?StatusEntity $previousStatus;
    protected ?bool $favorite;
    protected ?VersionEntityCollection $fixVersions;
}