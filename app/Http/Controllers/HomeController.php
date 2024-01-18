<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CalculatorRequest;


class HomeController extends Controller
{
    public function home ()
    {
        return view('/home');
    }
    public function calculate (Request $request)
    {

$request->validate([
    'firstNumber'=>['required','numeric'],
    'secondNumber'=>['required','numeric'],
    'operator'=>['required']
]);

       $firstNumber=$request->input('firstNumber');
       $secondNumber=$request->input('secondNumber');
       $operator=$request->input('operator');



if($operator=='add'){
     $result=$firstNumber+$secondNumber;
}
else if($operator=='substract'){
     $result=$firstNumber+$secondNumber;
}
else if($operator=='multiply'){
     $result=$firstNumber*$secondNumber;
}
else if($operator=='divide'){
     $result=$firstNumber/$secondNumber;
}

return redirect( '/')->with('calc','REZULTAT JE: '.$result);
}
    }

