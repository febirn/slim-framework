<?php

namespace Shop\Models;

abstract class AbstractModel
{
	protected $table;
	protected $db;

	public function __construct($db)
	{
		$this->db = $db;
	}

	public function getAll()
	{
		$this->db
			->select('*')
			->from($this->table);

		$query = $this->db->execute();

		return $query->fetchAll();
	}

	public function findById($id)
	{
		$this->db
			->select('*')
			->from($this->table)
			->where('id = ' . $id . ' AND deleted = 0');

		$query = $this->db->execute();

		return $query->fetch();
	}
}