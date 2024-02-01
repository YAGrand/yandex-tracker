<?php

namespace BugrovWeb\YandexTracker\Api\Entities;

/**
 * @method string getSelf()
 * @method int getUid()
 * @method string getLogin()
 * @method int getTrackerUid()
 * @method int getPassportUid()
 * @method string getCloudUid()
 * @method string getFirstName()
 * @method string getLastName()
 * @method string getDisplay()
 * @method string getEmail()
 * @method bool getExternal()
 * @method bool getHasLicense()
 * @method bool getDismissed()
 * @method bool getUseNewFilters()
 * @method bool getDisableNotifications()
 * @method string getFirstLoginDate()
 * @method string getLastLoginDate()
 * @method bool getWelcomeMailSent()
 * @method array getSources()
 */
class UserEntity extends Entity
{
    protected string $self;
    protected int $uid;
    protected ?string $login;
    protected ?int $trackerUid;
    protected ?int $passportUid;
    protected string $cloudUid;
    protected ?string $firstName;
    protected ?string $lastName;
    protected ?string $display;
    protected ?string $email;
    protected ?bool $external;
    protected ?bool $hasLicense;
    protected ?bool $dismissed;
    protected ?bool $useNewFilters;
    protected ?bool $disableNotifications;
    protected ?string $firstLoginDate;
    protected ?string $lastLoginDate;
    protected ?bool $welcomeMailSent;
    protected ?array $sources;
}