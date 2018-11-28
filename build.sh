#!/bin/bash

APP_NAME="Learning_Yaf"

rm -rf output

mkdir -p output

cp -r application conf public output/

cd output

tar zcf ${APP_NAME}.tar.gz application/ conf/ public/
rm -rf application/ conf/ public/