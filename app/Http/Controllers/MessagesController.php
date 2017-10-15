<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Validator;
Use App\Message;


class MessagesController extends Controller
{
    //Get Messages        
    public function index(){
        $result= Message::all();
         if ($result->count()) {
                return $result;
            }else{
                abort(404);
        }
    }
    
    //Store Messages in database
    public function store(Request $request){
        $validator= Validator::make($request->all(), [
            'email'=> 'required',
            'name'=> 'required',
            'subject'=> 'required',
            'body'=> 'required',
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors()
                                    ->add('info','Bad Request')
                                    ->add('status','400')
                                    ,400);     
        }
        
        $message= new Message;
        $message->email= request('email');
        $message->name= request('name');
        $message->subject= request('subject');
        $message->body= request('body');
        $message->save();
        $response = new Response();
        return $response->setStatusCode(201);
    }
    
    //Search with Email
    public function findEmail(Request $request){
        $email = $request->email;
        $result= Message::where('email',"$email")->get();
        if ($result->count()) {
            return $result;
        }else{
            abort(404);
        }
    }
    
    //Search with Text
    public function findText(Request $request){
        $text= $request->text;
        $result= Message::where('subject', 'LIKE', "%".$text."%")->orWhere('body', 'LIKE', "%".$text."%")->get();
        if ($result->count()) {
            return $result;
        }else{
            abort(404);
        }
    }
}
