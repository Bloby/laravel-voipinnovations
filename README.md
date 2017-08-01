laravel-voipinnovations
======

**NOTE:** This package is no longer in active development. Feel free to fork and extend it as needed.

A simple Laravel interface for interacting with the morinc API.


# Installation
To install the package, simply add the following to your Laravel installation's `composer.json` file:

```json
"require": {
	"laravel/framework": "5.*",
	"blob/laravel-voipinnovations": "dev-master"
},
```

Run `composer update` to pull in the files.

Then, add the following **Service Provider** to your `providers` array in your `config/app.php` file:

```php
'providers' => array(
    ...
    VoIPInnovations\Providers\VoIPInnovationsServiceProvider::class
);
```

From the command-line run:
`php artisan vendor:publish`

# Configuration

Open `config/voipinnovations.php` and configure the api endpoint and credentials:

```php
return [
    // WSDL URL
    'url'		=>	'https://url.com/APIService.asmx?wsdl',

    // WSDL LOGIN
    'login'	    =>	'username',

    // WSDL SECRET
    'secret'	=>	'user_secret',
];
```

# Usage
```php
$vi = VoIPInnovations::getDIDs($client_id);
```
