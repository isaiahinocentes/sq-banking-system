<?php

namespace App;

use App\Library\ClassFactory as CF;
use Carbon\Carbon;
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

            //if deduction will equate to negative balance
            if($amount < 0 && ($model->balance < $amount)){
                throw new \Exception("Insufficient Funds");
            }

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

    public static function getTransactionsToday(User $user){
        return $data = array(
            'deposits' => $user->deposits()->whereDate('created_at', Carbon::today())->get(),
            'withdraws' => $user->withdraws()->whereDate('created_at', Carbon::today())->get(),
            'timedeposits' => $user->timedeposits()->whereDate('created_at', Carbon::today())->get(),
            'receives' => $user->receives()->whereDate('created_at', Carbon::today())->get(),
            'transfers' => $user->transfers()->whereDate('created_at', Carbon::today())->get()
        );
    }

    /*| -----------------------
     * Relationships
     *| -----------------------
    */

    //
    public function withdraws(){
        return $this->hasMany('App\Withdraw', 'account_no', 'id');
    }

    public function deposits(){
        return $this->hasMany('App\Deposit', 'account_no', 'id');
    }

    //
    public function receives(){
            return $this->hasMany('App\Log', 'recipient_id', 'id');
    }
    public function transfers(){
        return  $this->hasMany('App\Log', 'sender_id', 'id');
    }


    //
    public function timedeposits(){
        return $this->hasMany('App\TimeDeposit', 'account_number', 'id');
    }
}
