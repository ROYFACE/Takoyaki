<?php

namespace ROYFACE\Takoyaki\Enum;

interface EnumInterface
{
	/**
	 * Function getValue
	 *
	 * @author YOUKI TAKEMOTO
	 * @return mixed
	 */
	public function value();

	/**
	 * Function values
	 *
	 * @author YOUKI TAKEMOTO
	 * @return array
	 */
	public function values() : array;

	/**
	 * Function hasValue
	 *
	 * @author YOUKI TAKEMOTO
	 * @param $value
	 * @return bool
	 */
	public function hasValue($value) : bool;

	/**
	 * Function getValue
	 *
	 * @author YOUKI TAKEMOTO
	 * @param $key
	 * @return mixed
	 */
	public function getValue($key);

	/**
	 * Function getKey
	 *
	 * @author YOUKI TAKEMOTO
	 * @return string
	 */
	public function key() : string;

	/**
	 * Function keys
	 *
	 * @author YOUKI TAKEMOTO
	 * @return string[]
	 */
	public function keys() : array;

	/**
	 * Function getKey
	 *
	 * @author YOUKI TAKEMOTO
	 * @param $value
	 * @return string
	 */
	public function getKey($value) : string;

	/**
	 * Function hasKey
	 *
	 * @author YOUKI TAKEMOTO
	 * @return bool
	 */
	public function hasKey() : bool;

	/**
	 * Function isSame
	 *
	 * @author YOUKI TAKEMOTO
	 * @param EnumInterface $enum
	 * @return bool
	 */
	public function isSame(EnumInterface $enum) : bool;
}