# PHP Subtleties: Shallow Copies and Array References
This repository demonstrates a common pitfall in PHP: the unexpected behavior of shallow copies when assigning objects and the implications of working with array references.

## The Problem
PHP's object assignment creates a shallow copy, meaning both variables point to the same object in memory. Similarly, directly referencing arrays can lead to unintended modifications.

## How to Reproduce
1. Clone this repository.
2. Run `bug.php` to observe the unintended side effects of shallow copies and array references.
3. Run `bugSolution.php` to see how to avoid these issues. 

## Solution
The solution involves understanding and employing appropriate techniques to manage object and array references effectively. The `bugSolution.php` provides illustrative examples. 