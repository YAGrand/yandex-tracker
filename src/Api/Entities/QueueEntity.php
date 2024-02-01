<?php

namespace BugrovWeb\YandexTracker\Api\Entities;

/**
 * Комментарий
 * 
 * @method string getSelf()
 * @method int getId()
 * @method string getKey()
 * @method int getVersion()
 * @method string getName()
 * @method string getDescription()
 * @method UserEntity getLead()
 * @method bool getAssignAuto()
 * @method array getDefaultType()
 * @method array getDefaultPriority()
 * @method bool getDenyVoting()
 * @method bool getDenyConductorAutolink()
 * @method bool getDenyTrackerAutolink()
 * @method bool getUseComponentPermissionsIntersection()
 * @method bool getAddSummoneeToIssueAccess()
 * @method bool getAddCommentAuthorToIssueFollowers()
 * @method string getWorkflowActionsStyle()
 * @method bool getUseLastSignature()
 * @method string getPermissionDeniedMessage()
 * @method string getPermissionDeniedHtml()
 */
class QueueEntity extends Entity
{
    protected string $self;
    protected int $id;
    protected string $key;
    protected int $version;
    protected string $name;
    protected string $description;
    protected UserEntity $lead;
    protected bool $assignAuto;
    protected array $defaultType;
    protected array $defaultPriority;
    protected bool $denyVoting;
    protected bool $denyConductorAutolink;
    protected bool $denyTrackerAutolink;
    protected bool $useComponentPermissionsIntersection;
    protected bool $addSummoneeToIssueAccess;
    protected bool $addCommentAuthorToIssueFollowers;
    protected string $workflowActionsStyle;
    protected bool $useLastSignature;
    protected string $permissionDeniedMessage;
    protected string $permissionDeniedHtml;
}