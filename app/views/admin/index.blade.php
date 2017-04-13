@extends("admin.base")

@section("content")
    {{ HTML::style('lib/css/index.css') }}
    {{--{{ Form::open(array('action'=>'AdminBaseController@login', 'class'=>'form-signup')) }}--}}
    <div class="index_con">
        <div class="login">
            {{ Form::open(array('action'=>'AdminBaseController@login')) }}
                <div class="input_prepend domestic">
                    <span class="icon"><i></i></span>
                    {{ Form::text('admin_name',null, array('placeholder' => '手机号码/电子邮件')) }}
                    {{--<input type="text" name="" placeholder="手机号码/电子邮件">--}}
                </div>
                {{--{{ Form::text('admin_name',null, array('clss' => 'test')) }}--}}
                <div class="input_prepend password">
                    <span class="icon"><i></i></span>
                    {{ Form::password('password',null, array('placeholder' => '密码')) }}
                    {{--<input type="password" name="" placeholder="密码">--}}
                </div>
                {{--{{ Form::password('password',null, array('clss' => 'test')) }}--}}
                <button type="submit" class="submit_btn">登 录</button>
            {{ Form::close() }}
        </div>
    </div>
@stop

{{--<form action="">--}}
    {{--<div class="input_prepend domestic">--}}
        {{--<span class="icon"><i></i></span>--}}
        {{--<input type="text" name="" placeholder="手机号码/电子邮件">--}}
    {{--</div>--}}
    {{--<div class="input_prepend password">--}}
        {{--<span class="icon"><i></i></span>--}}
        {{--<input type="password" name="" placeholder="密码">--}}
    {{--</div>--}}
    {{--<button type="submit" class="submit_btn">登 录</button>--}}
{{--</form>--}}
