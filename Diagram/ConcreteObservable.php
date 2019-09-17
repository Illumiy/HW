<?php

namespace app\Diagram;

use \app\Diagram\Observer;
use \app\Diagram\TObservable;

class ConcreteObservable implements \app\Diagram\Observable
{

    public function attach($observer){
        return false;
    }
    public static function detach($observer){
    }
    public function notify($observer){
    }
    private function observers(){
        return $Observable;
    }
}
