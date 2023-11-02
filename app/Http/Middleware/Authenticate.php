<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            return route('login');
        }
    }
}

// Website Kampung merupakan website yang di rancang untuk memberikan informasi menarik seputar terkini baik budaya berita atau ber edukasi dan belajar
// Website Kampung merupakan website yang di rancang untuk memberikan suatu informasi yang menarik seputar terkini baik budaya berita atau ber edukasi dan belajar teknologi baru