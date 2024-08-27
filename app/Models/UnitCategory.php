<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UnitOfMeasurement extends Model
{
    use HasFactory;

    protected $table = 'unit_of_measurement';

    protected $fillable = [
        'name',
        'abbreviation',
        'category_id',
    ];

    protected $casts = [
        'name' => 'string',
        'abbreviation' => 'string',
        'category_id' => 'integer',
    ];

    public function category(): BelongsTo
    {

    }
}
