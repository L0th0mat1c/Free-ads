#!/bin/bash -e
# type : GITHUB
# return to the main folder

./artisan migrate

./artisan db:seed --class=AddUserTable

./artisan db:seed --class=CategoryTableSeeder

./artisan db:seed --class=LocateTableSeeder

./artisan db:seed --class=AdsTableSeeder

./artisan serve

