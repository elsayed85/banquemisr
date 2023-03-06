misr<br>
TestMERCHANT_CBA <br>
405de7461df50083d3ce803c91c5bf05<br>

meeza<br>
10000001117<br>
100083<br>

# QNB Payment Integration Package

banquemisr Payment Integration Package is a Package for Integrated Payment via banquemisr Bank.

# Install

To install Package use composer

```php
  composer require elsayed85/banquemisr:dev-master
```

# Add service provider & alias

Add the following service provider to the array in: ``` config/app.php ```
  ```php
  Elsayed85\Banquemisr\BanquemisrServiceProvider::class
  ```
  
Add the following alias to the array in: ``` config/app.php```
  ```php
  'Banquemisr' =>Elsayed85\Banquemisr\Facades\Banquemisr::class
  ```
  
# Publish the config file

  ```php
  php artisan vendor:publish
  ```
  config file have name ``` BankPayment.php ``` it return an array of payment options like ``` apiOperation, currency, ApiUrl ```

## Usage

```php

	// Create Session for Payment SandBox Mode
	Banquemisr::createSessionSandBox();

	// Create Session for Payment Live Mode
	Banquemisr::createSessionLive();

	// Start Payment via MasterCard or Visa in SandBox Mode
	Banquemisr::createPaymentSandBox();

	// Start Payment via MasterCard or Visa in Live Mode
	Banquemisr::createPaymentLive();

	// Get Order Details in SandBox Mode
	Banquemisr::getOrderDetailsSandBox();

	// Get Order Details in Live Mode
	Banquemisr::getOrderDetailsLive();

	// Start Payment via Meeza Digital in SandBox Mode
	Banquemisr::createPaymentMeezaSandBox();

	// Start Payment via Meeza Digital in Live Mode
	Banquemisr::createPaymentMeezaLive();
```

## Example of Payment Method via Master Card or Visa in SandBox Mode
```php

	// Create Session for Payment
	$sessionID = Banquemisr::createSessionSandBox('125550', 'TESTQNBAATEST001', '9c6a123857f1ea50830fa023ad8c8d1b');

	// Start Payment via MasterCard or Visa
	{!! Banquemisr::createPaymentSandBox('success.php', 'fail.php', 'TESTQNBAATEST001', '125550', 20.00, $sessionID, 'Test QNB', 'Cairo', 'ahmedtaherinfo0@gmail.com', 0123456789, 'https://yourdomian.com/images/logo.png') !!}

	// Get Order Details
	dd(Banquemisr::getOrderDetailsSandBox('125550', 'TESTQNBAATEST001', '9c6a123857f1ea50830fa023ad8c8d1b'));


```

## Create Session should have contain: 

- Your Order ID in your System, Ex: '125550'.
- Merchant ID  in QNB System, Ex: 'TESTQNBAATEST001'.
- Merchant Password in QNB System, Ex: '9c6a123857f1ea50830fa023ad8c8d1b'.

## Response of Create Session Method
- Create and Retrieve Session ID.

## Create Payment Method should have contain: 

- Success URL Upon completion of the Request Success Payment, you will be redirect to this URL.
- Failer URL Upon completion of the Request Failer Payment, you will be redirect to this URL.
- Merchant ID  in QNB System, Ex: 'TESTQNBAATEST001'.
- Your Order ID in your System, Ex: '125550'.
- The Total Price for Order, Ex: '20.00'.
- Session ID, your Created in last step can you get it via Create Session Method.
- Site Name, Ex: 'Test QNB'.
- Site Address, Ex: 'Cairo', can you set null.
- Site Email, Ex: 'ahmedtaherinfo0@gmail.com', can you set null.
- Site Phone, Ex: '0123456789', can you set null.
- Site Logo URL, Ex: 'https://yourdomian.com/images/logo.png', can you set null.

## Get Order Details should have contain: 

- Your Order ID in your System, Ex: '125550'.
- Merchant ID  in QNB System, Ex: 'TESTQNBAATEST001'.
- Merchant Password in QNB System, Ex: '9c6a123857f1ea50830fa023ad8c8d1b'.

## Response of Get Order Details
- All Information of Payment, Ex: 'Payment Method, Total Price, Card Number, Transaction Date, ...'.

## Example of Payment Method via Meeza Digital in SandBox Mode
```php

	// Start Payment via Meeza Digital
	{!! createPaymentMeezaSandBox('success.php', 'fail.php', 10000001117, 100083, 123456, 80) !!}

```

## Create Payment Method should have contain: 

- Success URL Upon completion of the Request Success Payment, you will be redirect to this URL.
- Failer URL Upon completion of the Request Failer Payment, you will be redirect to this URL.
- The Configured Merchant ID from UPG, Ex: '10000001117'.
- The Configured Terminal ID from UPG for the Merchant, Ex: '100083'.
- Your Order ID in your System, Ex: '123456'.
- The Total Price for Order, Ex: '80.00'.

## Response of Complete Payment
- Send information of Payment To Success URL via Ajax Post Data.

## Response of Failer Payment
- Redirect to Failer URL.

## Contributing
- For major changes, please open an issue first to discuss what you would like to change.
- Please make sure to update tests as appropriate.

## License
[GNU General Public License](http://www.gnu.org/licenses/old-licenses/gpl-1.0.html)
