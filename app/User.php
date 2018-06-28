<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public static function updateBalance(User $model, float $amount) : array {
        try{

            $model->balance += $amount;

            if($model->save()){
                return array(
                    'id'        => $model->id,
                    'status'    => 'success',
                    'messages'  => 'Saved Successfully!',
                    'code'      => 200
                );
            } else {
                throw new \Exception("Database Error");
            }

        } catch (\Exception $e){
            return ( array(
                'status'    => 'error',
                't'         => 'An Error has occured!',
                'messages'  => $e->getMessage(),
                'cause'     => $e->getTrace(),
                'code'      => 0
            ));
        }
    }
}
