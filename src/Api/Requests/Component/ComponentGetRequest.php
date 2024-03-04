<?php

namespace BugrovWeb\YandexTracker\Api\Requests\Component;

use BugrovWeb\YandexTracker\Api\Client;

/**
 * Класс-конструктор для запроса к GET /v2/components
 *
 * @method \BugrovWeb\YandexTracker\Api\Responses\ComponentResponse send()
 * @see https://cloud.yandex.ru/docs/tracker/get-components
 */
class ComponentGetRequest extends ComponentRequest
{
    const ACTION = 'components';
    const METHOD = Client::METHOD_GET;
    protected static ?string $entityName = 'ComponentEntity';
    
    public function __construct(string $componentId)
    {
        $this->url = self::ACTION.'/'.$componentId;
    }
}