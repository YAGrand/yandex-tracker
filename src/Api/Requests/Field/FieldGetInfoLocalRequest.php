<?php

namespace BugrovWeb\YandexTracker\Api\Requests\Field;

use BugrovWeb\YandexTracker\Api\Client;

/**
 * Класс-конструктор для запроса к GET /v2/queues/$queueId/localFields/$fieldKey
 *
 * @see https://cloud.yandex.ru/docs/tracker/concepts/queues/get-info-local-field
 * @method \BugrovWeb\YandexTracker\Api\Responses\FieldResponse send()
 */
class FieldGetInfoLocalRequest extends FieldRequest
{
    const ACTION = 'queues';
    const METHOD = Client::METHOD_GET;
    protected static ?string $entityName = 'FieldEntity';

    public function __construct(string $queueId, string $fieldKey)
    {
        $this->url = self::ACTION.'/'.$queueId.'/localFields/'.$fieldKey;
    }
}