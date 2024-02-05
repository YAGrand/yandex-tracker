<?php

namespace BugrovWeb\YandexTracker\Api\Requests\Version;

use BugrovWeb\YandexTracker\Api\Client;

/**
 * Класс-конструктор для запроса к GET /v2/versions/
 *
 * @see https://cloud.yandex.ru/ru/docs/tracker/concepts/queues/create-version
 *
 * @method \BugrovWeb\YandexTracker\Api\Responses\VersionCollectionResponse send()
 */
class VersionGetAllRequest extends VersionRequest
{
    const ACTION = 'versions';
    const METHOD = Client::METHOD_GET;
    protected static ?string $entityName = 'VersionEntityCollection';

    /**
     * @var array|string[] Данные для отправки в запросе
     */
    protected array $data = [
        'queryParams' => [],
        'bodyParams'  => [],
    ];

    /**
     * @var array|string[] Параметры, доступные в теле запроса
     */
    protected array $bodyParams = [
    ];

    public function __construct()
    {
        $this->url = self::ACTION;
    }
}