#!/bin/bash

pwd

chown -R apache:devs .
chmod -R 570 .

touch ./.htaccess
chmod 770 ./.htaccess
touch ./wp-content
touch ./wp-content/uploads
chmod -R 770 ./wp-content/uploads
mkdir -p ./wp-content/cache
chmod -R 770 ./wp-content/cache
mkdir -p ./wp-content/plugins/wp-super-cache/
chmod -R 770 ./wp-content/plugins/wp-super-cache/
touch ./wp-content/wp-cache-config.php
chmod 770 ./wp-content/wp-cache-config.php
touch ./wp-content/advanced-cache.php
chmod 770 ./wp-content/advanced-cache.php
# Super Cache makes temporary files in wp-content:
# wp-content/2111967057.php
# Fuck that plugin
chmod 770 ./wp-content
# It also wants to edit wp-config.php
chmod 770 ./wp-config.php
