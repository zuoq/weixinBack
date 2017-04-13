<?php

// use Illuminate\Auth\UserTrait;
// use Illuminate\Auth\UserInterface;
// use Illuminate\Auth\Reminders\RemindableTrait;
// use Illuminate\Auth\Reminders\RemindableInterface;

class Message extends Eloquent {


    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'messages';
    public $timestamps = false;
    protected $fillable = array('nickname','message_text','bumen','is_show','bumen_text');


    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    //protected $hidden = array('remember_token','password');

}
