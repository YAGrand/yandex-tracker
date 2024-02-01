<?php

namespace BugrovWeb\YandexTracker\Api\Requests\Queue;

use BugrovWeb\YandexTracker\Api\Client;

/**
 * Класс-конструктор для запроса к GET /v2/queues/$queueId/versions
 *
 * @see https://cloud.yandex.ru/docs/tracker/concepts/queues/get-versions
 * @method \BugrovWeb\YandexTracker\Api\Responses\VersionCollectionResponse send()
 */
class QueueGetVersionsRequest extends QueueRequest
{
    const ACTION = 'queues';
    const METHOD = Client::METHOD_GET;
    protected static ?string $entityName = 'VersionEntityCollection';

    public function __construct(string $queueId)
    {
        $this->url = self::ACTION.'/'.$queueId.'/versions';
    }
}