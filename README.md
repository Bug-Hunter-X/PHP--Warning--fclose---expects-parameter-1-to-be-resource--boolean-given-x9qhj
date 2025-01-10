# PHP: fclose() Warning: Invalid File Handle

This repository demonstrates a common PHP error: calling `fclose()` on a file handle that's not a valid resource.  This often occurs when `fopen()` fails to open a file, and error checking is omitted.

The `bug.php` file shows the problematic code.  The `bugSolution.php` file provides a corrected version with proper error handling to prevent this warning.

## How to Reproduce
1. Clone this repository.
2. Run `bug.php`.  If the file 'test.txt' does not exist, you will get the warning.

## Solution
Always check the return value of `fopen()` before using the returned handle. The improved code in `bugSolution.php` demonstrates how to avoid this issue.