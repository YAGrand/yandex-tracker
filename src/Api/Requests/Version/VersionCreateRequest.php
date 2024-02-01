<?php

namespace BugrovWeb\YandexTracker\Api\Requests\Version;

use BugrovWeb\YandexTracker\Api\Client;

/**
 * Класс-конструктор для запроса к POST /v2/versions
 *
 * @see https://cloud.yandex.ru/ru/docs/tracker/concepts/queues/create-version
 *
 * @method VersionCreateRequest name(string $name) Название версии. Обязательное
 * @method VersionCreateRequest queue(string $queue) Id очереди. Обязательное
 * @method VersionCreateRequest description(string $description) Описание.
 * @method VersionCreateRequest startDate(string $startDate) Дата начала в формате YYYY-MM-DD
 * @method VersionCreateRequest dueDate(string $dueDate) Дата окончания в формате YYYY-MM-DD
 * @method \BugrovWeb\YandexTracker\Api\Responses\VersionResponse send()
 */
class VersionCreateRequest extends VersionRequest
{
    const ACTION = 'versions';
    const METHOD = Client::METHOD_POST;
    protected static ?string $entityName = 'VersionEntity';

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
        'queue',
        'description',
        'startDate',
        'dueDate',
    ];

    public function __construct()
    {
        $this->url = self::ACTION;
    }
}