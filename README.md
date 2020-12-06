# Liberation

## install

```
composer require kozo/liberation
```

## usage

`Liberation::{fileType}('{fileName}')`

### example1

```
// resources/sql/example.sql

select * from example
```

```php
use Liberation\Liberation;

$sql = Liberation::sql('example');
$rows = DB::select($sql);
```

## example2

```
// resources/sql/example.sql

select * from example
```

```php
$rows = DB::query()->sql('example');
```
