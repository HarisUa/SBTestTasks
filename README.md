SB Test Tasks
===================


> **Task 1:** Create sqrt function without using standard functions
######&&
> **Task 2:** Get count of Fridays 13th of leap years

----------


SQRT
-------------

####Description

```php
float harisSqrt( float n, int f = 0)
```
> **n:** 
> - The argument to process
> 
>  **f:** 
>  - Sets the number of decimal points.
####Usage
```php
// include class
include 'harisSqrt.php';

//initialize new object
$sqrt = new harisSqrt(25);
echo $sqrt->run(); // return 5

$sqrt = new harisSqrt(26, 3);
echo $sqrt->run(); // return 5.099
```

####Flow Chart
```flow
st=>start: Start
e=>end
op=>operation: x = 1;
op2=>operation: x = 0.5*(x+n/x);
cond=>condition: i=0, i<n, i++

st->op->cond
cond(yes)->op2->cond
cond(no)->e

```

----------
Fridays 13th
-------------

####Description

```php
int harisFridays( int yearStart, int yearEnd = 0)
```
> **yearStart:** 
> - Initial year of inspection
> 
>  **yearEnd:** 
>  - Final year of inspection
####Usage
```php
// include class
include 'harisFridays.php';

//initialize new object
$sqrt = new harisFridays(2016);
echo $sqrt->run(); // return 1

$sqrt = new harisFridays(2000, 2016);
echo $sqrt->run(); // return 8
```

####Flow Chart
```flow
st=>start: Start
e=>end
op=>operation: start = yearStart
end = yearEnd
fridays = 0
op2=>operation: date = 13th days;
op3=>operation: fridays++;
cond=>condition: i=start, i<=end, i++
cond2=>condition: if leap year
cond3=>condition: month=1, month<=12, month++
cond4=>condition: if date is friday

st->op->cond
cond(yes)->cond2
cond(no)->e
cond2(yes)->cond3
cond2(no)->cond
cond3(yes)->op2->cond4
cond3(no)->cond
cond4(yes)->op3->cond3
cond4(no)->cond3
```
