<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Library\ClassFactory as CF;
use Illuminate\Support\Facades\Hash;

class TransactionsController extends Controller
{
    
    public function depositForm(){
        return view('user/deposit');
    }

    public function depositQry(Request $req){
        
        $result = array();

        try{
            DB::beginTransaction();
            
            $user_model = CF::model('User')->find($req->get('account_no'));
            $deposit_data = $req->all();
            $deposit_data = CF::model('Deposit')::create_deposit($deposit_data);
    
            //Check if user account exists
            if(!isset($user_model)){
                throw new \Exception("Account doesn't exists");
            }
            
            //Update User Balance
            $result = $user_model->updateBalance($user_model, $req->get('amount'));
            if($result['status'] !== "success"){
                throw new \Exception("Can't Update User's Balance");
            }
            
            //Add Deposit Logs
            
            $result = CF::model('Deposit')->saveData($deposit_data);
            
            if($result['status'] !== "success"){
                throw new \Exception("Can't create Deposit Record");
            }

            DB::commit();
            return redirect()->route('user-logs');
            
        } catch (\Exception $e){
            
        }
        dd($result);
        
        DB::rollback();
        return redirect()->back()
        ->withInputs($req->input())
        ->withErrors($result);
    }

    public function withdrawForm(){
        return view('user/withdraw');
    }
    public function withdrawQry(Request $req){
        
        $result = array();
        
        try{
            
            DB::beginTransaction();
            
            
            $data = $req->all();
            $data = CF::model('Withdraw')->validateCreate($data);
            
            //Check if pin is correct
            if(!Hash::check($data['password'], auth()->user()->password) ){
                throw new \Exception("Wrong pin/password");
            }
            //Check amount
            if(auth()->user()->balance < $data['amount']){
                throw new \Exception("Withdraw Value exceeds Balance/Credit");
            }
            
            //Update Account
            $user = auth()->user();
            $result = CF::model('User')->updateBalance($user, -$data['amount']);
            if($result['code'] !== 200){
                throw new \Exception("Can't Update Balance");
            }
            
            //Create Withdraw log
            $result = CF::model("Withdraw")->saveData($data);
            if($result['status'] !== "success"){
                throw new \Exception("Can't Create Withdraw record");
            }

            //Commit database changes
            DB::commit();
            return redirect()
            ->route('user-logs')
            ->with('result', $result);

        } catch (\Exception $e) {
            $result['cause'] = $e->getMessage();
            DB::rollback();

            return redirect()->back()
            ->withInputs($req->input())
            ->withErrors($result);
        }
    }


    public function timedepositForm(){
        return view('user/timedeposit');
    }

    public function timedepositQry(Request $req){
        
        $result = array();

        try{

            $data = $req->all();
            $data = CF::model('TimeDeposit')->validate_create($data);
            
            DB::beginTransaction();

            //Update Balance
            $result = CF::model('User')->updateBalance(auth()->user(), -$data['initial_amount']);
            if($result['status'] !== "success"){
                throw new \Exception("Can't update User's Balance");
            }
            
            //Create TimeDeposit
            $result = CF::model('TimeDeposit')->saveData($data);
            if($result['status'] !== "success"){
                throw new \Exception("Can't create Time Deposit Record");
            }

            DB::commit();
            return redirect()->route('user-logs')
                ->with('result', $result);

        } catch(\Exception $e) {
            $result['error'] = $e->getMessage();
        }

        DB::rollback();
        return redirect()->back()
            ->withInput($req->inputs())
            ->withErrors($result);
    }

    public function transferForm(){
        return view('user/transfer');
    }

    public function payBillsForm(){
        return view('user/paybills');
    }
}
