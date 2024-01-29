<?php

namespace BugrovWeb\YandexTracker\Api\Requests\Queue;

use BugrovWeb\YandexTracker\Api\Client;

/**
 * Класс-конструктор для запроса к POST /v2/queues/$queueId/versions
 *
 * @see https://cloud.yandex.ru/ru/docs/tracker/concepts/queues/create-version
 *
 * @method QueueCreateVersionRequest name(string $name) Название версии. Обязательное
 * @method QueueCreateVersionRequest queue(string $queue) Id очереди. Обязательное
 * @method QueueCreateVersionRequest description(string $description) Описание.
 * @method QueueCreateVersionRequest startDate(string $startDate) Дата начала в формате YYYY-MM-DD
 * @method QueueCreateVersionRequest dueDate(string $dueDate) Дата окончания в формате YYYY-MM-DD
 */
class QueueCreateVersionRequest extends QueueRequest
{
    const ACTION = 'queues';
    const METHOD = Client::METHOD_POST;

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

    public function __construct(string $queueId)
    {
        $this->url = self::ACTION.'/'.$queueId.'/versions';
    }
}