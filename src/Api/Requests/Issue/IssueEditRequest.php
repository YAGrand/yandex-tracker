<?php

namespace BugrovWeb\YandexTracker\Api\Requests\Issue;

use BugrovWeb\YandexTracker\Api\Client;

/**
 * Класс-конструктор для запроса к PATCH /v2/issues/$issueId
 *
 * @see https://cloud.yandex.ru/docs/tracker/concepts/issues/patch-issue
 *
 * @method IssueEditRequest version(int $versionNumber) Версия задачи. Изменения вносятся только в текущую версию задачи
 *
 * @method IssueEditRequest summary(string $name) Название задачи
 * @method IssueEditRequest parent(string|array $parent) Родительская задача
 * @method IssueEditRequest description(string $text) Описание задачи
 * @method IssueEditRequest sprint(array $sprintArray) Блок с информацией о спринтах
 * @method IssueEditRequest type(array|string|int $issueType) Тип задачи
 * @method IssueEditRequest fixVersions(array|string|int $fixVesion) Исправить в версиях
 * @method IssueEditRequest priority(array|string|int $priority) Приоритет задачи
 * @method IssueEditRequest followers(array $followersArray) Идентификаторы или логины наблюдателей задачи
 * @method \BugrovWeb\YandexTracker\Api\Responses\IssueResponse send()
 */
class IssueEditRequest extends IssueRequest
{
    const ACTION = 'issues';
    const METHOD = Client::METHOD_PATCH;
    protected static ?string $entityName = 'IssueEntity';

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
        'version',
    ];

    /**
     * @var array|string[] Параметры, доступные в теле запроса
     */
    protected array $bodyParams = [
        'summary',
        'parent',
        'description',
        'sprint',
        'type',
        'priority',
        'followers',
        'fixVersions',
    ];

    public function __construct(string $issueId)
    {
        $this->url = self::ACTION.'/'.$issueId;
    }
}