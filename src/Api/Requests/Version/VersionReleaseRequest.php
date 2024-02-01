<?php

namespace BugrovWeb\YandexTracker\Api\Requests\Version;

use BugrovWeb\YandexTracker\Api\Client;

/**
 * Класс-конструктор для запроса к POST /v2/versions/$versionId/_release
 *
 * 
 * @method \BugrovWeb\YandexTracker\Api\Responses\VersionResponse send()
 */
class VersionReleaseRequest extends VersionRequest
{
    const ACTION = 'versions';
    const METHOD = Client::METHOD_POST;
    protected static ?string $entityName = 'VersionEntity';

    public function __construct(string $versionId)
    {
        $this->url = self::ACTION.'/'.$versionId . '/_release';
    }
}