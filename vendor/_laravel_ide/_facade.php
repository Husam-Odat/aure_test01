<?php

namespace Illuminate\Support\Facades;

interface Auth
{
    /**
     * @return \Webkul\Security\Models\User|false
     */
    public static function loginUsingId(mixed $id, bool $remember = false);

    /**
     * @return \Webkul\Security\Models\User|false
     */
    public static function onceUsingId(mixed $id);

    /**
     * @return \Webkul\Security\Models\User|null
     */
    public static function getUser();

    /**
     * @return \Webkul\Security\Models\User
     */
    public static function authenticate();

    /**
     * @return \Webkul\Security\Models\User|null
     */
    public static function user();

    /**
     * @return \Webkul\Security\Models\User|null
     */
    public static function logoutOtherDevices(string $password);

    /**
     * @return \Webkul\Security\Models\User
     */
    public static function getLastAttempted();
}