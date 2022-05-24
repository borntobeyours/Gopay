# Documentation

### Generate sessionId and UniqueId
```php
use Borntobeyours\Gopay\Gopay;

public function getSessionId(){
    $app = new Gopay();
    $data = $app->uuidv4();
    return $data;
}

public function getUniqueId(){
    $app = new Gopay();
    $data = $app->uuidv4();
    return $data;
}
```

### Login
```php
use Borntobeyours\Gopay\Gopay;

public function __construct($sessionId, $uniqueId)
    {
        $this->sessionId = '2A26735A-4902-4B97-BF03-66xxxxxx';
        $this->uniqueId  = 'F768EFD0-A4E7-41BF-B65A-E9xxxxxx'; 
    }

public function loginRequest($phone)
    {
        $app = new Gopay($this->sessionId, $this->uniqueId);

        $data = $app->loginRequest($phone); 

        return $data->otpToken;
    }

public function loginVerify($otp_token, $otp_code)
    {
        $app = new Gopay($this->sessionId, $this->uniqueId);

        $data = $app->getAuthToken($otp_token, $otp_code);

        return $data;
    }
```

### get Transaction History
```php
use Borntobeyours\Gopay\Gopay;

public function __construct($sessionId, $uniqueId, $token)
    {
        $this->sessionId = '2A26735A-4902-4B97-BF03-66xxxxxx';
        $this->uniqueId  = 'F768EFD0-A4E7-41BF-B65A-E9xxxxxx';
        $this->token = 'eyJhbGciOiJSUzI1NiIsImtpZCI6IiJ9..';
    }

public function trx_history()
    {
        $app = new Gopay($this->sessionId, $this->uniqueId, $this->token);
        $data = $app->getTransactionHistory();
        return $data;
    }
```

### get Gopay Balance
```php
use Borntobeyours\Gopay\Gopay;

public function __construct($sessionId, $uniqueId, $token)
    {
        $this->sessionId = '2A26735A-4902-4B97-BF03-66xxxxxx';
        $this->uniqueId  = 'F768EFD0-A4E7-41BF-B65A-E9xxxxxx';
        $this->token = 'eyJhbGciOiJSUzI1NiIsImtpZCI6IiJ9..';
    }

public function get_balance()
    {
        $app = new Gopay($this->sessionId, $this->uniqueId, $this->token);
        $data = $app->getBalance();
        return $data;
    }
```

### get Gopay Profile
```php
use Borntobeyours\Gopay\Gopay;

public function __construct($sessionId, $uniqueId, $token)
    {
        $this->sessionId = '2A26735A-4902-4B97-BF03-66xxxxxx';
        $this->uniqueId  = 'F768EFD0-A4E7-41BF-B65A-E9xxxxxx';
        $this->token = 'eyJhbGciOiJSUzI1NiIsImtpZCI6IiJ9..';
    }

public function get_profile()
    {
        $app = new Gopay($this->sessionId, $this->uniqueId, $this->token);
        $data = $app->getProfile();
        return $data;
    }
```

### check Gopay Account
```php
use Borntobeyours\Gopay\Gopay;

public function __construct($sessionId, $uniqueId, $token)
    {
        $this->sessionId = '2A26735A-4902-4B97-BF03-66xxxxxx';
        $this->uniqueId  = 'F768EFD0-A4E7-41BF-B65A-E9xxxxxx';
        $this->token = 'eyJhbGciOiJSUzI1NiIsImtpZCI6IiJ9..';
    }

public function isGojek($phone)
    {
        $app = new Gopay($this->sessionId, $this->uniqueId, $this->token);
        $data = $app->isGojek($phone);
        return $data;
    }
```

### Transfer Gopay
```php
use Borntobeyours\Gopay\Gopay;

public function __construct($sessionId, $uniqueId, $token)
    {
        $this->sessionId = '2A26735A-4902-4B97-BF03-66xxxxxx';
        $this->uniqueId  = 'F768EFD0-A4E7-41BF-B65A-E9xxxxxx';
        $this->token = 'eyJhbGciOiJSUzI1NiIsImtpZCI6IiJ9..';
    }

public function transfer_gopay($phone, $amount, $pin)
    {
        $app = new Gopay($this->sessionId, $this->uniqueId, $this->token);
        $data = $app->transferGopay($phone, $amount, $pin);
        return $data;
    }
```

### Transfer Bank
```php
use Borntobeyours\Gopay\Gopay;

public function __construct($sessionId, $uniqueId, $token)
    {
        $this->sessionId = '2A26735A-4902-4B97-BF03-66xxxxxx';
        $this->uniqueId  = 'F768EFD0-A4E7-41BF-B65A-E9xxxxxx';
        $this->token = 'eyJhbGciOiJSUzI1NiIsImtpZCI6IiJ9..';
    }

public function transfer_bank($bank_code, $no_rekening, $amount, $pin)
    {
        $app = new Gopay($this->sessionId, $this->uniqueId, $this->token);
        $data = $app->transferBank($bank_code, $no_rekening, $amount, $pin);
        return $data;
    }
```