<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Caregiver extends Model
{
    use HasFactory;

    protected $table = 'caregivers';
    protected $primaryKey = 'id_caregiver';

    protected $fillable = ['user_id'];

    
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id_user');
    }
}
