<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
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
    ];
    public function Klnat()
    {
        return $this->hasOne(Klant::class, 'id', 'ids');
    }

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
    ];
    public function getAvatar()
    {
        $firstCharacter = $this->email[0];

        if (is_numeric($firstCharacter)) {
            $integerToUse = ord(strtolower($firstCharacter)) - 21;
        } else {
            $integerToUse = ord(strtolower($firstCharacter)) - 96;
        }



        $randomInteger = rand(0, 30);
        return 'https://www.gravatar.com/avatar/'
            . md5($this->email)
            . '?s=200'
            . '&d=https://webronckhorst-demo.nl/icon/avatars/default-avatar-'
            . $integerToUse
            . '.png';
    }
    public function isAdmin()
    {
        return in_array(
            $this->email, [
                "info@webronckhorst.nl",
                "jamir32@example.net",
                "pete6997@gmail.com"
            ]);
    }
}
