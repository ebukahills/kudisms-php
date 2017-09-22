# kudisms
PHP API Wrapper for [Kudi SMS](www.kudisms.com) bulk messaging



```php
require_once 'src/Kudisms.php';

$kudisms = new Kudisms($username, $password, $senderId);

// Send SMS
// $numbers must be in this format for now 2347062359125
$kudisms->sendsms($number, $message);  
// numbers: String || [String]
// message: String

// Check SMS Balance
$kudisms->checkBalance();


```
### TODO
- Full Documentation.
- Format number in a format.
- use name space instead of required_once
- add to composer

- Test Coverage

Contributors are appreciated 😁