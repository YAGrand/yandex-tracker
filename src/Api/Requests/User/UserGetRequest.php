<?php

namespace BugrovWeb\YandexTracker\Api\Requests\User;

use BugrovWeb\YandexTracker\Api\Client;

/**
 * Класс-конструктор для запроса к GET /v2/users/$uid
 *
 * @see https://cloud.yandex.ru/docs/tracker/get-user
 * 
 * @method \BugrovWeb\YandexTracker\Api\Responses\UserResponse send()
 */
class UserGetRequest extends UserRequest
{
    const ACTION = 'users';
    const METHOD = Client::METHOD_GET;
    protected static ?string $entityName = 'UserEntity';

    public function __construct(string $uid)
    {
        $this->url = self::ACTION.'/'.$uid;
    }
}