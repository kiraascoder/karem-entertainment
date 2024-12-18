<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    // Menambahkan kolom 'name' ke dalam fillable
    protected $fillable = ['name', 'manager_id']; // Pa
    // Relasi dengan model User (Manager)
    public function manager()
    {
        return $this->belongsTo(User::class, 'manager_id');
    }
    public function members()
    {
        return $this->belongsToMany(User::class, 'team_members');
    }
    
}
