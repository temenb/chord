#!/bin/bash

docker exec -i chord-php sh -c "php artisan schedule:run"
