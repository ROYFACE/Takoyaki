<?php

namespace ROYFACE\Takoyaki\Enum;

use InvalidArgumentException;
use ReflectionClass;

/**
 * Class Enum
 *
 * @author YOUKI TAKEMOTO
 * @package ROYFACE\Takoyaki\Enum
 */
class Enum implements EnumInterface
{
	/**
	 * Property value
	 *
	 * @author YOUKI TAKEMOTO
	 * @var mixed $value
	 */
	private $value;

	/**
	 * Enum constructor.
	 *
	 * @author YOUKI TAKEMOTO
	 * @param mixed $value
	 */
	private function __construct($value)
	{
		$this->setValue($value);
	}

	/**
	 * Function value
	 *
	 * @author YOUKI TAKEMOTO
	 * @return mixed
	 */
	public function value()
	{
		return $this->value;
	}

	/**
	 * Function values
	 *
	 * @author YOUKI TAKEMOTO
	 * @return array
	 */
	public function values() : array
	{
		$reflection = new ReflectionClass(static::class);

		return $reflection->getConstants();
	}

	/**
	 * Function hasValue
	 *
	 * @author YOUKI TAKEMOTO
	 * @param $value
	 * @return bool
	 */
	public function hasValue($value) : bool
	{
		$reflection = new ReflectionClass(static::class);
		$constants = $reflection->getConstants();

		$key = array_search($value, $constants, true);

		return $key !== false;
	}

	/**
	 * Function key
	 *
	 * @author YOUKI TAKEMOTO
	 * @return string
	 */
	public function key() : string
	{
		$reflection = new ReflectionClass(static::class);
		$constants = $reflection->getConstants();

		$key = array_search($this->value, $constants, true);

		if ($key !== false) {
			return $key;
		}

		throw new InvalidArgumentException('invalid value');
	}

	public function getValue($key)
	{
		// TODO: Implement getValue() method.
	}

	/**
	 * Function keys
	 *
	 * @author YOUKI TAKEMOTO
	 * @return array
	 */
	public function keys() : array
	{
		$reflection = new ReflectionClass(static::class);
		$constants = $reflection->getConstants();

		return array_keys($constants);
	}

	public function getKey($value) : string
	{
		// TODO: Implement getKey() method.
	}

	public function hasKey() : bool
	{
		$keys = $this->keys();
	}

	/**
	 * 同じ値を保持するインスタンスであるかを確認
	 *
	 * @author YOUKI TAKEMOTO
	 * @param EnumInterface $enum
	 * @return bool
	 */
	public function isSame(EnumInterface $enum) : bool
	{
		return $this->value === $enum->value();
	}

	/**
	 * 値をセットする
	 *
	 * @author YOUKI TAKEMOTO
	 * @param $value
	 * @return void
	 */
	private function setValue($value)
	{
		if ($this->hasValue($value) === false) {
			throw new InvalidArgumentException('invalid value');
		}

		$this->value = $value;
	}

	/**
	 * Function __callStatic
	 *
	 * @author YOUKI TAKEMOTO
	 * @param $name
	 * @param $arguments
	 * @return static
	 * @throws InvalidArgumentException
	 */
	public static function __callStatic($name, $arguments)
	{
		$reflection = new ReflectionClass(static::class);
		$constants = $reflection->getConstants();

		if (array_key_exists($name, $constants)) {
			return new static($constants[$name]);
		}

		throw new InvalidArgumentException('invalid value');
	}
}