<?php
/**
 * Created by PhpStorm.
 * User: zuoq
 * Date: 2016/6/4
 * Time: 12:15
 */
class UserPublicController extends BaseController {
//    注册
    public function login() {
        $data = Input::all();
        $mobile = $data['mobile'];
        $password = $data['password'];
        if(!Auth::attempt(array('mobile'=>$mobile,'password' => $password))) {
            return Response::json(['err'=>403,'info'=>$password]);
        }else {
            $userInfo = Auth::user();
            return Response::json(['err'=>200,'info'=>$userInfo]);
        }
//
//        if (Auth::attempt(array('mobile' => $mobile, 'password' => $password)))
//        {
//            return Response::json(['err'=>200,'info'=>'sdjklsjdskljd']);
//        }


//        return Response::json(['err'=>200,'info'=>'sdjklsjdskljd']);
    }

    public function register() {
        $data = Input::all();
        if(User::where('mobile', $data['mobile'])->first()) return Response::json(['err' => 403,  'info' => '该手机号码已经注册过!!']);
        User::create([
            'mobile' => $data['mobile'],
            'password' => Hash::make($data['password']),
            'username' => $data['username'],
            'reg_time' => \Carbon\Carbon::now()
        ]);
        return Response::json(['err' => 200,  'info' => '注册成功!!!']);
    }
};