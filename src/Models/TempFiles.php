<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use MieProject\Files\Models\Files;

class TempFiles extends Model
{
    use HasFactory;

    public function file()
    {
        $this->hasOne(Files::class);
    }
}
