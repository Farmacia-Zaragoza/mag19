#!/bin/bash

if [ -d mag19 ] ; then
rm -rf ./mag19
fi

git clone https://github.com/Farmacia-Zaragoza/mag19.git
for i in $(find mag19 -maxdepth 1 -type d | cut -d "/" -f2  | grep -v "^\." | grep -v "mag19" )  ; do
rm -rf ./$i
done

cp -rf ./mag19/extensions/* ./
rm -rf ./var/cache/*