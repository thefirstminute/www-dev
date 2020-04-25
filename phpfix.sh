#!/bin/sh
find ./ -type f -name "*.php" -exec sed -i 's/<?/<?php/g' {} \;
find ./ -type f -name "*.php" -exec sed -i 's/<?php=/<?php\ echo/g' {} \;
find ./ -type f -name "*.php" -exec sed -i 's/<?phpphp/<?php/g' {} \;
