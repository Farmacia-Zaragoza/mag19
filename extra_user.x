#!/bin/bash
cp -rf ./mag19/create_admin_user.php ./
rm -rf ./var/cache/*
php -f create_admin_user.php