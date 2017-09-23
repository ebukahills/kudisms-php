# kudisms
PHP API Wrapper for [Kudi SMS](www.kudisms.com) bulk messaging



```php
require_once 'src/Kudisms.php';

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
- Format number in a format.
- use name space instead of required_once
- add to composer

- Test Coverage

Contributors are appreciated 😁