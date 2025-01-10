```php
$file = fopen("test.txt", "r+");
if ($file) {
    // ... process the file ...
    fclose($file); // Close the file handle
} else {
    // Handle the error appropriately.  For example:
    echo "Error opening file: " . error_get_last()['message'] . "\n";
}
```
This corrected code explicitly checks if `fopen()` successfully opened the file. If not, it handles the error instead of attempting to close an invalid handle.  The addition of a simple error message gives more helpful feedback.