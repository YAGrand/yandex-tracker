<?php

namespace BugrovWeb\YandexTracker\Api\Requests\User;

use BugrovWeb\YandexTracker\Api\Client;

/**
 * Класс-конструктор для запроса к GET /v2/users
 *
 * @see https://cloud.yandex.ru/docs/tracker/get-users
 *
 * @method UserGetAllRequest perPage(int $count) Количество пользователей на странице ответа
 * @method UserGetAllRequest page(int $pageNumber) Номер страницы ответа
 * @method \BugrovWeb\YandexTracker\Api\Responses\UserCollectionResponse send()
 */
class UserGetAllRequest extends UserRequest
{
    const ACTION = 'users';
    const METHOD = Client::METHOD_GET;
    protected static ?string $entityName = 'UserCollectionEntity';

    /**
     * @var array|string[] Данные для отправки в запросе
     */
    protected array $data = [
        'queryParams' => [],
        'bodyParams'  => [],
    ];

    /**
     * @var array|string[] get-параметры, доступные для запроса
     */
    protected array $queryParams = [
        'perPage',
        'page',
    ];

    public function __construct()
    {
        $this->url = self::ACTION;
    }
}