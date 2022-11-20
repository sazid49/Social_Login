1.composer require laravel/socialite
....
....
'providers' => [
    ....
    ....
    Laravel\Socialite\SocialiteServiceProvider::class,
],
'aliases' => [
    'Socialite' => Laravel\Socialite\Facades\Socialite::class,
],


config/services=>
return [
    'facebook' => [
        'client_id' => 'Facebook app id',
        'client_secret' => 'Facebook add secret',
        'redirect' => 'http://localhost:8000/auth/facebook/callback',
    ],
]
