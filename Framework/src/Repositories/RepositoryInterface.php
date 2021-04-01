<?php

namespace ROYFACE\Takoyaki\Repositories;

interface RepositoryInterface
{
	public function create();
	public function update();
	public function delete();
	public function get();
	public function find();
	public function findBy();

	public function paginate();
}