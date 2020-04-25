#!/bin/sh
# THIS DOESN'T WORK YET...

# FIRST CHANGE ALL .html TO .phps
rename 's/.html$/.php/' *.html

# then change all the fucked includes to php includes
find ./ -type f -name "*.php" -exec sed -i 's/<?/<?php/g' {} \;
find ./ -type f -name "*.php" -exec sed -i 's/<?php=/<?php\ echo/g' {} \;
find ./ -type f -name "*.php" -exec sed -i 's/<?phpphp/<?php/g' {} \;
