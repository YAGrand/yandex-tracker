<?php

namespace BugrovWeb\YandexTracker\Api\Requests\Field;

use BugrovWeb\YandexTracker\Api\Client;

/**
 * Класс-конструктор для запроса к GET /v2/fields/$fieldId
 *
 * @see https://cloud.yandex.ru/docs/tracker/concepts/issues/get-issue-fields
 * @method \BugrovWeb\YandexTracker\Api\Responses\FieldResponse send()
 */
class FieldGetParamsRequest extends FieldRequest
{
    const ACTION = 'fields';
    const METHOD = Client::METHOD_GET;
    protected static ?string $entityName = 'FieldEntity';

    public function __construct(string $fieldId)
    {
        $this->url = self::ACTION.'/'.$fieldId;
    }
}