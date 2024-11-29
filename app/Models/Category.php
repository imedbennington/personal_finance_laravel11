<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'type',
    ];

    // A category can be associated with many transactions
    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
}
