<?php

namespace Classes\Models;

class Package extends AbstractActiveRecord
{
    protected $id;
    protected $number;

    protected static $tableName = 'pakages';

    public function getNumber()
    {
        return $this->number;
    }
}
