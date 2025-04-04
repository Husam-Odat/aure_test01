<?php

namespace Illuminate\Http;

interface Request
{
    /**
     * @return \Webkul\Security\Models\User|null
     */
    public function user($guard = null);
}