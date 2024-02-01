<?php

namespace BugrovWeb\YandexTracker\Api\Requests\Status;

use BugrovWeb\YandexTracker\Api\Client;

/**
 * Класс-конструктор для запроса к POST /v2/statuses
 *
 * @see https://cloud.yandex.ru/ru/docs/tracker/concepts/queues/create-version
 *
 * @method StatusEditRequest name(string $name) Название версии. Обязательное
 * @method StatusEditRequest key(string $key) Ключ статуса. Обязательное
 * @method StatusEditRequest description(string $description) Описание.
 * @method \BugrovWeb\YandexTracker\Api\Responses\StatusResponse send()
 */
class StatusCreateRequest extends StatusRequest
{
    const ACTION = 'versions';
    const METHOD = Client::METHOD_POST;
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
        'name',
        'key',
        'description',
    ];

    public function __construct()
    {
        $this->url = self::ACTION;
    }
}