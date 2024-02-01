<?php

namespace BugrovWeb\YandexTracker\Api\Requests\Status;

use BugrovWeb\YandexTracker\Api\Client;

/**
 * Класс-конструктор для запроса к GET /v2/statuses/{id}
 *
 * @see https://cloud.yandex.ru/ru/docs/tracker/concepts/queues/create-version
 *
 * @method \BugrovWeb\YandexTracker\Api\Responses\StatusResponse send()
 */
class StatusGetRequest extends StatusRequest
{
    const ACTION = 'statuses';
    const METHOD = Client::METHOD_GET;
    protected static ?string $entityName = 'StatusEntity';

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

    public function __construct(string $statusId)
    {
        $this->url = self::ACTION.'/'.$statusId;
    }
}