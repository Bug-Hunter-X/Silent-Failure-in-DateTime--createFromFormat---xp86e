```php
$dateString = '2024-03-10 10:30:00';
$date = DateTime::createFromFormat('Y-m-d H:i:s', $dateString);
if ($date === false) {
    $errors = DateTime::getLastErrors();
    echo 'Failed to create DateTime object. Errors: ' . json_encode($errors['errors']) . '\n';
} else {
    echo $date->format('Y-m-d H:i:s');
}
```