<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{
    protected $fillable = ['name', 'stock', 'expiry_date', 'type', 'is_available'];
 
    protected function casts(): array
    {
        return [
            'is_available' => 'boolean',     // your boolean column
            'stock' => 'integer',     // your integer column
            'expiry_date' => 'integer',  // your integer column
        ];
    }
}
