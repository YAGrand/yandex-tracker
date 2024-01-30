<?php

namespace BugrovWeb\YandexTracker\Api\Requests\Version;

use BugrovWeb\YandexTracker\Api\Client;

/**
 * Класс-конструктор для запроса к PATCH /v2/versions
 *
 * @see https://cloud.yandex.ru/ru/docs/tracker/concepts/queues/create-version
 *
 * @method VersionEditRequest name(string $name) Название версии. Обязательное
 * @method VersionEditRequest queue(string $queue) Id очереди. Обязательное
 * @method VersionEditRequest description(string $description) Описание.
 * @method VersionEditRequest startDate(string $startDate) Дата начала в формате YYYY-MM-DD
 * @method VersionEditRequest dueDate(string $dueDate) Дата окончания в формате YYYY-MM-DD
 */
class VersionEditRequest extends VersionRequest
{
    const ACTION = 'versions';
    const METHOD = Client::METHOD_PATCH;

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

    public function __construct(string $versionId)
    {
        $this->url = self::ACTION.'/'.$versionId;
    }
}