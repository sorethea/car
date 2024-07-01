<?php

namespace Sorethea\Car\Models;

use factories\MakeFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Make extends Model
{
    use HasFactory;

    protected static function newFactory()
    {
        return new MakeFactory;
    }
}
