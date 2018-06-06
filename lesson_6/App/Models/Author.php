<?php

namespace App\Models;

use App\Db;
use App\Model;

class Author extends Model
{
    public const TABLE = 'authors';

    public $name;

}