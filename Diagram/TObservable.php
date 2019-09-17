<?php

namespace app\Diagram;

trait TObservable
{
    public function attach($observer){
        return false;
    }
    public static function detach($observer){
    }
    public function notify($observer){
    }
}
