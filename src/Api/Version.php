<?php

namespace BugrovWeb\YandexTracker\Api;

use BugrovWeb\YandexTracker\Api\Requests\Version\VersionCreateRequest;
use BugrovWeb\YandexTracker\Api\Requests\Version\VersionEditRequest;
use BugrovWeb\YandexTracker\Api\Requests\Version\VersionGetRequest;
use BugrovWeb\YandexTracker\Api\Requests\Version\VersionGetAllRequest;
use BugrovWeb\YandexTracker\Api\Requests\Version\VersionReleaseRequest;
use BugrovWeb\YandexTracker\Api\Requests\Version\VersionArchiveRequest;
use BugrovWeb\YandexTracker\Exceptions\TrackerConstructorException;

/**
 * Класс для работы с версиями. Выдает определенный экземпляр класса на основе магического метода
 *
 * @method VersionCreateRequest create() Создать версию
 * @method VersionEditRequest edit(int $vesionId) Изменить версию
 * @method VersionGetRequest get(int $vesionId) Получить версию
 * @method VersionGetAllRequest getAll() Получить все версии
 * @method VersionReleaseRequest release(int $vesionId) Выпустить в релиз версию
 * @method VersionArchiveRequest archive(int $vesionId) Отправить в архив версию
 */
class Version extends TrackerAction
{
    /**
     * @var array|string[] Запросы, доступные для работы с очередями
     */
    protected array $methodsList = [
        'create',
        'edit',
        'get',
        'getAll',
        'release',
        'archive',
    ];

    /**
     * @param string $name
     * @param array $arguments
     *
     * @return VersionRequest
     *
     * @throws TrackerConstructorException
     */
    public function __call(string $name, array $arguments)
    {
        if (!in_array($name, $this->methodsList)) {
            throw new TrackerConstructorException("Метод $name не существует");
        }

        $className = __NAMESPACE__.'\\Requests\\Version\\'.'Version'.ucfirst($name).'Request';

        try {
            return new $className(...$arguments);
        } catch (\Exception $e) {
            throw new TrackerConstructorException("Класс $className не найден");
        }
    }
}