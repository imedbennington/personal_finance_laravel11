<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'account_id',
        'user_id',
        'category_id',
        'type',
        'amount',
        'date',
        'description',
    ];

    // A transaction belongs to an account
    public function account()
    {
        return $this->belongsTo(Account::class);
    }

    // A transaction belongs to a user
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
}
