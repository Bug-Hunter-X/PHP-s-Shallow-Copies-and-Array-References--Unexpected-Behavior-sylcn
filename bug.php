In PHP, a common yet subtle error arises when dealing with references and object assignments.  Consider this scenario: 
```php
class MyClass {
    public $value = 10;
}

$obj1 = new MyClass();
$obj2 = $obj1; // Assignment, not passing by reference

$obj2->value = 20;

var_dump($obj1->value); // Outputs 20
```
Many developers expect this to output 10, believing that `$obj2` is a copy of `$obj1`. However, in PHP, this is a *shallow copy*: both `$obj1` and `$obj2` point to the *same* object in memory. Modifying `$obj2` alters the original object, indirectly affecting `$obj1`.

Another less obvious issue lies in how PHP handles array references:

```php
$arr1 = [1, 2, 3];
$arr2 = &$arr1; // Explicit pass by reference

$arr2[] = 4; //Modifying the referenced array

var_dump($arr1); // Outputs [1, 2, 3, 4] - showing the change

unset($arr2);

var_dump($arr1); //Outputs [1, 2, 3, 4] - still contains the modified data
```
Unsetting `$arr2` doesn't remove the changes from `$arr1` because it only unsets the reference, not the underlying array data.