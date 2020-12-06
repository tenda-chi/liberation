# Liberation

[![Scrutinizer code quality (GitHub/Bitbucket)](https://img.shields.io/scrutinizer/quality/g/kozo/liberation?style=flat-square)](https://scrutinizer-ci.com/g/kozo/liberation/)
[![CircleCI](https://img.shields.io/circleci/build/github/kozo/liberation?style=flat-square)](https://app.circleci.com/pipelines/github/kozo/liberation)

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
