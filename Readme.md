# kudisms
PHP API Wrapper for [Kudi SMS](www.kudisms.com) bulk messaging


## Installation

[PHP](https://php.net) 5.4+ and [Composer](https://getcomposer.org) are required.

Add the following line to your `composer.json` file.

```
"flyg101/kudisms-php": "1.0.*"
```

Run `composer install` to to update your autoloader


## Usage

```php
// require_once 'src/Kudisms.php';

// include your composer dependencies
require_once 'vendor/autoload.php';

use Flyg101\KudiSMS\Kudisms;

$kudisms = new Kudisms($username, $password, $senderId);

// Send SMS
// $numbers must be either a string or an arrays of strings.
//$numbers can be in any of these formats '07062359125', '+2347062359125', '2347062359125'
//$message must be a string.
$kudisms->sendsms($number, $message);  
// The response is a JSON object.


// Check SMS Balance
$kudisms->checkBalance();


```
### TODO
- Full Documentation.
- Format number for different Types.
- use Namespace instead of require_once
- Make Available on composer

- Full Test Coverage

Contributors are appreciated 😁