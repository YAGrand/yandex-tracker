<?php

namespace BugrovWeb\YandexTracker\Api\Entities;

/**
 * 
 * 
 * @method string getSelf()
 * @method string getId()
 * @method string getName()
 * @method string getKey()
 * @method int getVersion()
 * @method array getSchema()
 * @method bool getReadonly()
 * @method bool getOptions()
 * @method bool getSuggest()
 * @method array getQueryProvider()
 * @method int getOrder()
 * @method array getCategory()
 * @method array getSuggestProvider()
 * @method array getOptionsProvider()
 * @method string getType()
 * @method string getStyle()
 */
class FieldEntity extends Entity
{
    protected ?string $self;
    protected ?string $id;
    protected ?string $name;
    protected ?string $key;
    protected ?int $version;
    protected ?array $schema;
    protected ?bool $readonly;
    protected ?bool $options;
    protected ?bool $suggest;
    protected ?array $queryProvider;
    protected ?int $order;
    protected ?array $category;
    protected ?array $suggestProvider;
    protected ?array $optionsProvider;
    protected ?string $type;
    protected ?string $style;
}