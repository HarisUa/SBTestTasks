SB Test Tasks
===================


> **Task 1:** Create sqrt function without using standard functions
###### &&
> **Task 2:** Get count of Fridays 13th of leap years



SQRT
-------------

#### Description

```php
float harisSqrt( float n, int f = 0)
```
> **n:** The argument to process
> 
>  **f:** Sets the number of decimal points.
#### Usage
```php
// include class
include 'harisSqrt.php';

//initialize new object
$sqrt = new harisSqrt(25);
echo $sqrt->run(); // return 5

$sqrt = new harisSqrt(26, 3);
echo $sqrt->run(); // return 5.099
```

----------
Fridays 13th
-------------

#### Description

```php
int harisFridays( int yearStart, int yearEnd = 0)
```
> **yearStart:** Initial year of inspection
> 
>  **yearEnd:** Final year of inspection
#### Usage
```php
// include class
include 'harisFridays.php';

//initialize new object
$days = new harisFridays(2016);
echo $sqrt->run(); // return 1

$days = new harisFridays(2000, 2016);
echo $sqrt->run(); // return 8
```
