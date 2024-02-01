<?php

namespace BugrovWeb\YandexTracker\Api;

use BugrovWeb\YandexTracker\Api\Requests\Status\StatusCreateRequest;
use BugrovWeb\YandexTracker\Api\Requests\Status\StatusEditRequest;
use BugrovWeb\YandexTracker\Api\Requests\Status\StatusGetRequest;
use BugrovWeb\YandexTracker\Api\Requests\Status\StatusGetAllRequest;
use BugrovWeb\YandexTracker\Exceptions\TrackerConstructorException;

/**
 * Класс для работы с версиями. Выдает определенный экземпляр класса на основе магического метода
 *
 * @method StatusCreateRequest create() Создать статус
 * @method StatusEditRequest edit(int $statusId) Изменить статус
 * @method StatusGetRequest get(int $statusId) Получить статус
 * @method StatusGetAllRequest getAll() Получить все статусы
 */
class Status extends TrackerAction
{
    /**
     * @var array|string[] Запросы, доступные для работы с очередями
     */
    protected array $methodsList = [
        'create',
        'edit',
        'get',
        'getAll',
    ];

    /**
     * @param string $name
     * @param array $arguments
     *
     * @return StatusRequest
     *
     * @throws TrackerConstructorException
     */
    public function __call(string $name, array $arguments)
    {
        if (!in_array($name, $this->methodsList)) {
            throw new TrackerConstructorException("Метод $name не существует");
        }

        $className = __NAMESPACE__.'\\Requests\\Status\\'.'Status'.ucfirst($name).'Request';

        try {
            return new $className(...$arguments);
        } catch (\Exception $e) {
            throw new TrackerConstructorException("Класс $className не найден");
        }
    }
}