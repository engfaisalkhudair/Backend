<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\User;

class Dress extends Model
{
    use HasFactory , SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $table = 'dresses';

    protected $fillable = [
        'user_id',
        'client_name',
        'client_phone',
        'paid_amount',
        'Remaining_amount',
        'dress_name',
        'dress_code',
        'dress_size',
        'notes',
        'event_date',
        'em_name',
    ];

    // ===== Begin::Relationship Between Employees and Categories =========
    public function user()
    {
        return $this->hasMany(User::class);
    }
    // ===== End::Relationship Between Employees and Categories ===========
}
