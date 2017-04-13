<?php
/**
 * Created by PhpStorm.
 * User: zuoq
 * Date: 2016/6/4
 * Time: 12:15
 */
class MessageController extends BaseController {
//    注册
    public function login() {
        $mess = Message::get();
        return $mess;
//        if (Auth::attempt(array('mobile' => $mobile, 'password' => $password)))
//        {
//            return Response::json(['err'=>200,'info'=>'sdjklsjdskljd']);
//        }


//        return Response::json(['err'=>200,'info'=>'sdjklsjdskljd']);
    }

    public function hasShow() {
        $has_Show = Message::where('is_show',1)->get();
        return Response::json($has_Show);
    }
    public function notShow() {
        $not_Show = Message::where('is_show',0)->get();
        return Response::json($not_Show);
    }

     public function getAll() {
        $mess_isShow = Message::where('is_show',1)->get();
        return Response::json($mess_isShow);
     }

    public function delete() {
        $data = Input::all();
        $id = $data['id'];
        $is_exit = Message::where('id',$id)->get();
        if($is_exit=="[]") {
            return Response::json(['err' => 403,  'info' => '出错了，未能删除留言！']);

        }
        $delete = Message::where('id',$id)->delete();

        return Response::json(['err' => 200,  'info' => '删除留言成功！']);
    }


    public function setShow() {
        $data = Input::all();
        $id = $data['id'];
        $updata = Message::where('id',$id)->update(['is_show' => 1]);
        if($updata=="[]") {
            return Response::json(['err' => 403,  'info' => '设置出错了！']);
        }
        return Response::json(['err' => 200,  'info' => '设置成功！']);

    }
    public function setNotShow() {
        $data = Input::all();
        $id = $data['id'];
        $updata = Message::where('id',$id)->update(['is_show' => 0]);
        if($updata=="[]") {
            return Response::json(['err' => 403,  'info' => '设置出错了！']);
        }
        return Response::json(['err' => 200,  'info' => '设置成功！']);

    }


    public function saveMes() {
        $data = Input::all();
        if(!$data['nickname']) {
            return Response::json(['err' => 403,  'info' => '未能获取到您的昵称!!']);
        }
        if(!$data['message_text']) {
            return Response::json(['err' => 403,  'info' => '留言不能为空!!']);
        }
        if(!$data['selected']) {
            return Response::json(['err' => 403,  'info' => '未选择部门!!']);
        }
//        if(!$data['bumen_text']) {
//            return Response::json(['err' => 403,  'info' => '未选择部门!!']);
//        }
        Message::create([
            'nickname' => $data['nickname'],
            'message_text' => $data['message_text'],
            'bumen' => $data['selected'],
            'is_show' => 0
        ]);

        // $message = new Message;
        // $message ->nickname = $data['nickname'];
        // $message -> save();

        return Response::json(['err' => 200,  'info' => '留言成功，等待审核后显示']);
    }

    public function byName() {
        $data = Input::all();
        $nickname = $data['nickname'];
        $users = Message::where(['nickname'=>$nickname,'is_show'=>1])->get();
        if($users=="[]") {
            return Response::json(['err' => 403,  'info' => '未能查找到！']);
        }
        return ['err' => 200,  'info' => '查找成功！','response' => $users];
    }

    public function byBuMen() {
        $data = Input::all();
        $select = $data['select'];
        $users = Message::where(['bumen'=>$select,'is_show'=>1])->get();
        if($users=="[]") {
            return Response::json(['err' => 403,  'info' => '未能查找到！']);
        }
        return ['err' => 200,  'info' => '查找成功！','response' => $users];
    }


};