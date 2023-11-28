<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',

        'nama',
        'kelas',
        'jurusan',
        'profile_image',
        
        'jenis',
        'pilihan',
        'kunci',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',

    ];
    public function adminlte_image(){
        return 'https://c1.klipartz.com/pngpicture/887/370/sticker-png-customer-avatar-user-user-profile-flat-design-cartoon-yellow-animation.png';
    }
    public function adminlte_desc(){
        return 'your beautiful';
    }
    public function adminlte_profile_url(){
        return 'profile';
    }
}
