```php
$date = DateTime::createFromFormat('Y-m-d H:i:s', '2024-03-10 10:30:00');
if ($date === false) {
    echo 'Failed to create DateTime object.';
} else {
    echo $date->format('Y-m-d H:i:s');
}
```