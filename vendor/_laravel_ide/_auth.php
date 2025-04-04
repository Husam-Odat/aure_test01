<?php

namespace Illuminate\Contracts\Auth;

interface Guard
{
    /**
     * @return \Webkul\Security\Models\User|null
     */
    public function user();
}