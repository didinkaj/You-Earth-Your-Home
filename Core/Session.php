<?php

namespace Core;


class Session
{
    /**
     * @return bool
     */
    public static function start()
    {
        return session_start();
    }

}