<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActivityLog extends Model
{
    use HasFactory;

    protected $fillable = [
        'account',
        'module',
        'remark'
    ];

    public function account()
    {
        return $this->belongsTo(Account::class, 'account');
    }
}
