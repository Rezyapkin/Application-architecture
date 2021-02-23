<?php

namespace task1\notify;

abstract class DecoratorNotify implements INotify
{
    protected $notify = null;
 
    public function __construct(INotify $notify)
    {
        $this->notify = $notify;
    }

}
