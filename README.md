# Silent Failure in DateTime::createFromFormat()

This repository demonstrates a common, yet easily overlooked, error in PHP's `DateTime::createFromFormat()` function.  The function returns `false` on failure but does not throw an exception.  This can lead to unexpected behavior if the error isn't explicitly checked for.

The `bug.php` file shows the problematic code. The `bugSolution.php` file provides a solution using explicit error handling.

## How to Reproduce

1. Clone this repository.
2. Run `bug.php`.  Observe that there is no clear indication of failure if the input string is not a valid date and time.
3. Run `bugSolution.php`. Observe robust error handling.

## Solution
Always check the return value of `DateTime::createFromFormat()` for `false` to ensure the date and time was created successfully.  Handle errors gracefully to prevent unexpected behavior.