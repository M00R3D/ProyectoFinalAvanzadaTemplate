<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Patient extends Model
{
    use HasFactory;

    protected $table = 'patients';
    protected $primaryKey = 'id_patient';

    protected $fillable = [
        'user_id',         
        'first_name', 
        'last_name',
        'birth_date', 
        'gender',
        'address',
        'phone',
        'health_status',
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id_user');
    }

}
