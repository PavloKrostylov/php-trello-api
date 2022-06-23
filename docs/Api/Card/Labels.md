Trello Card Labels API
======================

### Set a given card&#039;s labels by label color name
```php
$api->cards()->labels()->set(string $id, array $labels)
```

### Create a new Label on a Card
```php
$api->cards()->labels()->create(string $id, array $params)
```

### Add a given card&#039;s label by label ID
```php
$api->cards()->labels()->add(string $id, array $labelId)
```

### Remove a given label from a given card by label color name
```php
$api->cards()->labels()->remove(string $id, string $label)
```

### Remove a given label from a given card by label ID
```php
$api->cards()->labels()->delete(string $id, string $labelId)
```

