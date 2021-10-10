<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>


## Penjelasan Kode : 


Membuat API CRUD (Create, Read, Update, Delete) dengan database


Create => membuat data anak melibatkan (inisialNama, nama, umur, beratBadan, tinggiBadan, jenisKelamin),
Read => menampilkan semua data anak dan juga bisa menampilkan dengan pencarian inisialNama,
Update => mengupdate data yang baru dengan menggunakan inisialNama untuk pencarian data,
Delete => menghapus data dengan id

membuat API Login dan Register dengan middleware Sanctum

untuk bisa mengakses CRUD anak dia atas diharuskan login atau register terlebih dahulu jika tidak akan terjadi seperti gambar :
![nologin](https://user-images.githubusercontent.com/77370938/136696738-2fb5b5df-186d-4305-b21c-5968fa0fb66d.png)

## API Login :
![login](https://user-images.githubusercontent.com/77370938/136696994-f3a4c6af-416e-478d-92cc-29c6f0c346a5.png)

## API Register :
![register](https://user-images.githubusercontent.com/77370938/136697364-697ac779-5211-415b-9c92-56b0b76612b9.png)

## dari 2 api di atas masing masing mengembalikan token, token ini berfungsi agar kita bisa membuat CRUD anak dan didapatkan saat login dan register

## API Logout :
![logout](https://user-images.githubusercontent.com/77370938/136697117-f8f9b8e2-38d4-4366-8a51-88a1718f3f9c.png)

## API CRUD

## API Create :
![create](https://user-images.githubusercontent.com/77370938/136697182-0e425992-e8a7-483c-8769-6588cbef46ee.png)

## API Read : 
ALL : 
![read](https://user-images.githubusercontent.com/77370938/136697376-a39154fb-d73a-4bed-b5d1-72e1c39c22de.png)
by inisial nama :
![by](https://user-images.githubusercontent.com/77370938/136697417-ff1d4497-836c-49d6-874e-ed1626a65b0b.png)

## API Update :
![update](https://user-images.githubusercontent.com/77370938/136697458-36eb1042-9b55-4de3-a5d4-81af49471867.png)

## API Delete :
![delete](https://user-images.githubusercontent.com/77370938/136697485-641e335c-5a19-47f4-88a0-462e517676dc.png)






