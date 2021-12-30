<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Wallet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class dashboardController extends Controller
{
    public function getDashboard(){
        $wallet = Wallet::where('user_id',Auth::user()->id)->get();

        $outcome = 0;
        $income = 0;

        foreach($wallet as $value){
            $outcome += $value->transaction->where('amount','<',0)->sum('amount');
        }

        foreach($wallet as $value){
            $income += $value->transaction->where('amount','>',0)->sum('amount');
        }

        return view('dashboard',['wallet' => $wallet,'outcome' => $outcome,'income' => $income]);
    }

    public function createWallet(Request $request,$id){
        $wallet = new Wallet;
        $wallet->name = $request->name;
        $wallet->user_id = $id;
        if($request->initial_balance != ''){
            $wallet->initial_balance = $request->initial_balance;
        }

        $wallet->save();

        return redirect('dashboard');
    }
}
