<?php


namespace Otushw\DBSystem;

use Otushw\DBSystem\IndexDTO;


abstract class NoSQLDAO
{
    protected $index;

    public function __construct(IndexDTO $index)
    {
        $this->index = $index;
    }

    public function create(array $source):bool
    {
        return false;
    }

    public function read($id): array
    {
        return [];
    }

    public function update($id, array $source): bool
    {
        return false;
    }

    public function delete($id): bool
    {
        return false;
    }

    protected function isJSON($string)
    {
        json_decode($string);
        return (json_last_error() == JSON_ERROR_NONE);
    }

    public function getItems($limit = 10, $offset = 0): array
    {
        return [];
    }

    public function getCount(): int
    {
        return 0;
    }

    public function getSumField($fieldName)
    {
        return 0;
    }
}