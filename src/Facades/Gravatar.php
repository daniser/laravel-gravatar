<?php

namespace LaravelGravatar\Facades;

use Illuminate\Support\Facades\Facade;
use LaravelGravatar\Image;
use LaravelGravatar\Profile;

/**
 * @method static Image image(string|null $email = null, string|null $presetName = null)
 * @method static Image avatar(string|null $email = null, string|null $presetName = null)
 * @method static Profile profile(string|null $email = null, string|null $format = null)
 */
class Gravatar extends Facade
{
    /**
     * The facade accessor string.
     */
    protected static function getFacadeAccessor(): string
    {
        return 'gravatar';
    }
}
