<?php

namespace App\Http\Controllers;
use Validator;
use Illuminate\Http\Request;
use App\models\contact;
use Illuminate\Support\Str;

class api_data extends Controller
{
    public function contact_us(Request $request){
        $v = Validator::make($request->all(),[
            'client_name'=>'required|min:3|regex:/^[a-z A-Z]+$/u',
            'client_number' => 'required|regex:/^[0-9._]+$/|min:11|max:11',
            'client_message' => 'required|regex:/^[a-zA-Z0-9._]+$/',
            
            //'password' => 'required|min:7|confirmed'
        ]);
        if ($v->fails())
        {
            if($v->errors()->has("client_name")||$v->errors()->has("client_number")||$v->errors()->has("client_message")){
              return response()->json(["message"=>"برجاء التأكد من ملء الحقول"]);
              
            }
           
          
        }
        else{
            $data=contact::create(
                ['client_name'=>$request->client_name,
                'client_number'=>$request->client_number,
                'client_message'=>$request->client_message,]
            );
            //ini_set("port",547);
           // mail("amr.ratebyan@gmail.com","receiving from contact","dd");
           return response()->json(["message"=>"تم استقبال الطلب"]);

        }
      
    }
    public function generate_token(){
        /*$name=Str::random(64);

        return $name;  
        $a=1;
        do {
            $name=Str::random(32);
            echo  $name."\n";

            
            $a++;
        } while ($a <= 10); */

        return csrf_token();
    }
}
