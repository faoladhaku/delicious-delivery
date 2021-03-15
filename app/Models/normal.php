<?php

    //namespace App;
    namespace App\Models;
    use Illuminate\Notifications\Notifiable;
    use Illuminate\Foundation\Auth\User as Authenticatable;

    class normal extends Authenticatable
    {
        use Notifiable;

        protected $guard = 'normal';
        protected $table = 'user';
        protected $fillable = [
            'name', 'email', 'password',
        ];

        protected $hidden = [
            'password', 'remember_token',
        ];
    }