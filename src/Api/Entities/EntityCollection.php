<?php

namespace BugrovWeb\YandexTracker\Api\Entities;


class EntityCollection
implements \ArrayAccess, \Iterator, \Countable, \JsonSerializable
{
	/**
	 * @var array
	 */
	protected $values = array();

	/**
	 * Creates object.
	 *
	 * @param array | null $values
	 */
	public function __construct(array $values = null)
	{
		if($values !== null)
		{
            $entityName = substr( static::class, 0, -10);
            foreach($values as $value){
                $this->add(is_array($value)?new $entityName($value):$value);
            }
		}
	}

	public function add(Entity $entity): void
	{
		$this->values[] = $entity;
	}

	/**
	 * @return array
	 */
	public function getEntities()
	{
		return $this->values;
	}

	/**
	 * @param $values
	 */
	public function setEntities($values)
	{
		$this->values = $values;
	}

	public function clear()
	{
		$this->values = array();
	}

    /**
     * Filter collection by function and return new collection
     *
     * @param callable $callback
     * @return void
     */
    public function filter(callable $callback): EntityCollection
    {
        return new static(array_filter($this->values, $callback));
    }

	/**
	 * Get next element
	 */
	public function fetch(): Entity
	{
		return next($this->values);
	}

	/**
	 * Return the current element
	 */
	#[\ReturnTypeWillChange]
	public function current()
	{
		return current($this->values);
	}

	/**
	 * Move forward to next element
	 */
	public function next(): void
	{
		next($this->values);
	}

	/**
	 * Return the key of the current element
	 */
	#[\ReturnTypeWillChange]
	public function key()
	{
		return key($this->values);
	}

	/**
	 * Checks if current position is valid
	 */
	public function valid(): bool
	{
		return ($this->key() !== null);
	}

	/**
	 * Rewind the Iterator to the first element
	 */
	public function rewind(): void
	{
		reset($this->values);
	}

	/**
	 * Whether a offset exists
	 */
	public function offsetExists($offset): bool
	{
		return isset($this->values[$offset]) || array_key_exists($offset, $this->values);
	}

	/**
	 * Offset to retrieve
	 */
	#[\ReturnTypeWillChange]
	public function offsetGet($offset)
	{
		if (isset($this->values[$offset]) || array_key_exists($offset, $this->values))
		{
			return $this->values[$offset];
		}

		return null;
	}

	/**
	 * Offset to set
	 */
	#[\ReturnTypeWillChange]
	public function offsetSet($offset, $value): void
	{
		if($offset === null)
		{
			$this->values[] = $value;
		}
		else
		{
			$this->values[$offset] = $value;
		}
	}

	/**
	 * Offset to unset
	 */
	public function offsetUnset($offset): void
	{
		unset($this->values[$offset]);
	}

	/**
	 * Count elements of an object
	 */
	public function count(): int
	{
		return count($this->values);
	}

	/**
	 * Returns the values as an array.
	 *
	 * @return array
	 */
	public function toArray()
	{
		return $this->values;
	}

	/**
	 * Returns true if the dictionary is empty.
	 * @return bool
	 */
	public function isEmpty()
	{
		return empty($this->values);
	}

	/**
	 * JsonSerializable::jsonSerialize � Specify data which should be serialized to JSON
	 * @return array
	 */
	#[\ReturnTypeWillChange]
	public function jsonSerialize()
	{
		return $this->values;
    }
}
