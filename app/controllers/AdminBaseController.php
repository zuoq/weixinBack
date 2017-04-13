<?php
/**
 * Created by PhpStorm.
 * User: zuoq
 * Date: 2016/5/5
 * Time: 21:19
 */

class AdminBaseController extends BaseController {
//    protected $layout = 'admin.base';
    public function loginView () {
        return View::make('admin.index');
    }

    public function login($id) {
        $name_1 = Input::get('admin_name');
        $user = User::where('username','=',$name_1)->first();
//        $user = User::find($name_1);
        echo $user;
//        if($users[0]["username"]==$name) {
//            echo "登陆成功！";
//        }
//        if(!$user) return Response::json(['err'=>404,'info'=>'not find']);
        if(!$user) {
            echo "not find!!!";
        }
//        $validator = Validator::make(
//            array(
//                'username' => 'Zuoq',
////                'password' => '123456'
//            )
//        );
//        echo $validator;
//        echo $name;
//        return Redirect::to('/');
    }
}