<?php

namespace BugrovWeb\YandexTracker\Api;

use BugrovWeb\YandexTracker\Api\Entities\Entity;
use BugrovWeb\YandexTracker\Api\Entities\EntityCollection;
use Psr\Http\Message\ResponseInterface;

class ClientResponse
{
    
    protected ?string $entityName;

    /**
     * @var int $httpCode HTTP-код ответа
     */
    protected int $httpCode;

    /**
     * @var array|int|string $body Тело ответа
     */
    protected $body;

    /**
     * @var array $headers Заголовки ответа
     */
    protected array $headers;

    public function __construct(ResponseInterface $response, string $entityName = null)
    {
        $this->entityName = $entityName;
        $this->httpCode = $response->getStatusCode();
        $this->headers = $response->getHeaders();
        $this->body = json_decode($response->getBody(), true);
    }

    /**
     * Возвращает тело ответа
     *
     * @return Entity|EntityCollection
     */
    public function getResponseEntity()
    {
        if(empty($this->entityName)){
            throw new \Exception('$entityName is empty!');
        }
        
        $entityClassName = $this->entityName;
        if(!class_exists($entityClassName)){
            throw new \Exception('Entity class "'.$entityClassName.'" not exists!');
        }

        return new $entityClassName($this->body);

    }

    /**
     * Возвращает тело ответа
     *
     * @return array|int|string
     */
    public function getResponse()
    {
        return $this->body;
    }

    /**
     * Возвращает заголовки ответа
     *
     * @return array
     */
    public function getHeaders(): array
    {
        return $this->headers;
    }

    /**
     * Возвращает массив заданного заголовка
     *
     * @param string $header Название HTTP-заголовка
     * @return array|string|false
     */
    public function getHeader(string $header)
    {
        $returnHeader = '';

        if (array_key_exists($header, $this->headers)) {
            $returnHeader = count($this->headers[$header]) === 1
                ? current($this->headers[$header]) : $this->headers[$header];
        }

        return $returnHeader;
    }

    /**
     * Возвращает нужное поле из тела ответа
     *
     * @param string $fieldName название поля в теле ответа
     * @return string|int|array|null
     */
    public function getField(string $fieldName)
    {
        return array_key_exists($fieldName, $this->body) ? $this->body[$fieldName] : null;
    }

    /**
     * Возвращает HTTP-код ответа
     *
     * @return int HTTP-код ответа
     */
    public function getStatusCode(): int
    {
        return $this->httpCode;
    }
}