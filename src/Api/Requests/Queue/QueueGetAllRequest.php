<?php

namespace BugrovWeb\YandexTracker\Api\Requests\Queue;

use BugrovWeb\YandexTracker\Api\Client;
use BugrovWeb\YandexTracker\Api\Entities\QueueEntityCollection;

/**
 * Класс-конструктор для запроса к GET /v2/queues/
 *
 * @see https://cloud.yandex.ru/docs/tracker/concepts/queues/get-queues
 *
 * @method QueueGetAllRequest expand(string $field) Дополнительные поля, которые будут включены в ответ
 * @method QueueGetAllRequest perPage(int $count) Количество очередей на странице ответа
 * @method QueueGetAllRequest page(int $pageNumber) Номер страницы ответа
 * @method \BugrovWeb\YandexTracker\Api\Responses\QueueCollectionResponse send()
 */
class QueueGetAllRequest extends QueueRequest
{
    const ACTION = 'queues';
    const METHOD = Client::METHOD_GET;

    protected static ?string $entityName = 'QueueEntityCollection';

    /**
     * @var array|string[] Данные для отправки в запросе
     */
    protected array $data = [
        'queryParams' => [],
        'bodyParams'  => [],
    ];

    /**
     * @var array|string[] get-параметры, доступные для запроса
     */
    protected array $queryParams = [
        'expand',
        'perPage',
        'page',
    ];

    public function __construct()
    {
        $this->url = self::ACTION.'/';
    }
}