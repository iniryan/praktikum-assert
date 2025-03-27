# Praktikum PHPUnit

## Pengenalan singkat
PHPUnit adalah framework testing untuk PHP yang digunakan untuk melakukan unit testing

## Step by step
- Install Composer 
    - [Composer](https://getcomposer.org/)
- Install Visual Studio
- Install PHP 8.0 ke atas
- Buat folder dengan nama “latihan_assert”
- Install PHP Unit pada folder “latihan assert” 
    - [PHPUnit](https://docs.phpunit.de/en/10.5/installation.html)
    - [Laravel](https://laravel.com/docs/12.x/testing)

## Install PHPUnit
```
composer require --dev phpunit/phpunit
```

## Run PHPUnit
```
php vendor/bin/phpunit namaTestCaseFile.php
```

## Assertions di PHPUnit
Assert adalah istilah di PHP Unit yang bertujuan untuk memastikan output yang diminta sesuai yang diharapkan.

Ada beberapa assert, yaitu:
### AssertTrue 
Fungsi bawaan di PHPUnit, digunakan untuk menegaskan apakah nilai assertionnya benar atau tidak. Pernyataan ini akan menghasilkan nilai benar jika nilai pernyataan benar, jika tidak maka akan menghasilkan nilai salah.

Jika benar, kasus uji yang ditegaskan akan lulus, jika tidak, kasus uji akan gagal.

Syntax:
```
assertTrue($condition, string $message = '')
```
- Parameter `$condition` = sebuah ekspresi atau nilai boolean yang diharapkan bernilai true
- Parameter `$message` = Pesan error jika assertion gagal

### AssertFalse
Fungsi bawaan di PHPUnit dan digunakan untuk menyatakan nilai kondisional benar atau salah. Pernyataan ini akan menghasilkan nilai benar jika nilai kondisinya benar, jika tidak, akan menghasilkan nilai salah.
    
Cara dan sintaxnya hampir sama dengan assertTrue, yang membedakan adalah pemanggilan AssertFalse pada code yang akan ditest.

Syntax:
```
assertFalse($condition, string $message = '')
```
- Parameter `$condition` = sebuah ekspresi atau nilai boolean yang diharapkan bernilai false
- Parameter `$message` = Pesan error jika assertion gagal

### AssertSame
Digunakan untuk menegaskan apakah nilai sebenarnya yang diperoleh sama dengan nilai yang diharapkan atau tidak. Pernyataan ini akan menghasilkan nilai benar jika nilai yang diharapkan sama dengan nilai sebenarnya, jika tidak maka akan menghasilkan nilai salah. Jika benar, kasus uji yang ditegaskan akan lulus, jika tidak, kasus uji akan gagal.

Syntax:
```
assertSame($expected, $actual, $message = '')
```
- Parameter `$expected` = nilai yang diharapkan 
- Parameter `$actual` = nilai aktual yang diuji
- Parameter `$message` = pesan error jika assertion gagal

### AssertEquals
Fungsi bawaan di PHPUnit dan menegaskan apakah nilai aktual yang diperoleh sama dengan nilai yang diharapkan atau tidak. Pernyataan ini akan menghasilkan nilai benar jika nilai yang diharapkan sama dengan nilai sebenarnya, jika tidak maka akan menghasilkan nilai salah. ketika nilai yang dinyatakan benar, kasus uji akan lulus atau gagal.

Syntax:
```
assertEquals($expected, $actual, $message = '')
```
- Parameter `$needle` = elemen yang dicari/diharapkan ada, yang menjadi bagian dari `$haystack`
- Parameter `$haystack` = kumpulan elemen
- Parameter `$message` = pesan error jika assertion gagal

### AssertContains
Fungsi bawaan di PHPUnit dan menegaskan array yang memiliki nilai. Assert ini akan menghasilkan nilai benar jika array berisi nilai yang diberikan, jika tidak, kembalikan salah dan jika benar, kasus uji yang diassert akan lolos, jika tidak, kasus uji akan gagal.

Syntax:
```
assertContains($needle, $haystack, $message = '')
```
- Parameter `$needle` = elemen yang dicari/diharapkan ada, yang menjadi bagian dari `$haystack`
- Parameter `$haystack` = kumpulan elemen
- Parameter `$message` = pesan error jika assertion gagal