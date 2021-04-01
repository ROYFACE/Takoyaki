<?php

namespace ROYFACE\Takoyaki\Entities\Fields;

interface FieldInterface
{
	public function setType($type);

	public function getType();

	public function getName();
}