<?php

interface Observable
{
    public function attach($observer);

    public function detach($observer);

    public function notify($observer);
}