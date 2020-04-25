#!/bin/sh
find ./ -type f -name "*.php" -exec sed -i 's/http/https/g' {} \;
find ./ -type f -name "*.php" -exec sed -i 's/httpss/https/g' {} \;
