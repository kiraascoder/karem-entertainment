<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeamMember extends Model
{
    use HasFactory;

    // Menambahkan kolom 'team_id' dan 'user_id' ke dalam fillable
    protected $fillable = ['team_id', 'user_id']; // Pastikan 'team_id' dan 'user_id' ada di sini

    // Kolom lainnya yang diizinkan mass assignment bisa ditambahkan di sini
}
