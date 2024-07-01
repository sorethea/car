<?php

namespace Sorethea\Car\Models;

use factories\CarFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected static function newFactory(): CarFactory
    {
        return new CarFactory;
    }
}
