<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Order;
use DB;
// use App\Service\TestClasses;
use App\Service\EmailService;
use App\Service\Class3;


class TestController extends Controller
{
    public function test(Request $request){
        // pure qury builder
        // $users=User::selectRaw("users.name , users.email, count('orders.id') as total_orders, sum('orders.amount') as Total_amt ")->leftJoin('orders','orders.user_id','=','users.id')->where('orders.status','completed')->groupBy('users.name' , 'users.email')->get();
        // useing  the realtion model 
        // $users = User::withCount(['orders' => function ($query) {
        //     $query->where('status', 'completed');
        // }])
        // ->get(['name', 'email', 'orders_count']); // 'orders_count' is automatically added
        // dd($users->toArray());



        // firs accasor and mutatior
        // $us=User::with('orders')->get();
        $user=User::get();
        // $user->name='Test';
        // $user->save();
        $us=User::with('orders')->Active()->get();
        dd($us->toArray(),$user->toArray());
        // dd(User::find(1)->toArray());

    }

    // understantin the the calss and objet concept
    public function register(){
        // $temp= new EmailService('Yogesh');

        $temp1=  new class3();
        dd( $temp1->fun1());
    }

    
    
}
