<?php

namespace App;

// use Illuminate\Database\Eloquent\Model;
use App\Notifications\StudResetPasswordNotification;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


class Stud extends Authenticatable
{
    use Notifiable;

    protected $guard = 'stud';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'stud_id', 'stud_name', 'email', 'password', 'prog_code',
      ];
     /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
      protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
      'email_verified_at' => 'datetime',
    ];

    public function sendPasswordResetNotification($token)
    {
        $this->notify(new StudResetPasswordNotification($token));
    }
}
