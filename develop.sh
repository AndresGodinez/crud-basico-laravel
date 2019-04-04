#!/usr/bin/env bash

export APP_PORT=${APP_PORT:-80}
export DB_PORT=${DB_PORT:-3306}
export MYSQL_ROOT_PASSWORD=${MYSQL_ROOT_PASSWORD:-secret}
export MYSQL_DATABASE=${MYSQL_DATABASE:-aGoDB}
export MYSQL_USER=${MYSQL_USER:-aGodinez} 
export MYSQL_PASSWORD=${MYSQL_PASSWORD:-secret}

COMPOSE="docker-compose"

if [ $# -gt 0 ]; then

    if [ "$1" == "art" ]; then
        shift 1
        $COMPOSE run --rm \
            -w /var/www/html \
            app \
            php artisan "$@"

    elif [ "$1" == "composer" ]; then
        shift 1
        $COMPOSE run --rm \
            -w /var/www/html \
            app \
            composer "$@"

    elif [ "$1" == "test" ]; then
        shift 1
        $COMPOSE run --rm \
            -w /var/www/html \
            app \
            ./vendor/bin/phpunit "$@"

    elif [ "$1" == "npm" ]; then
        shift 1
        $COMPOSE run --rm \
            -w /var/www/html \
            node \
            npm "$@"

    elif [ "$1" == "gulp" ]; then
        shift 1
        $COMPOSE run --rm \
            -w /var/www/html \
            node \
            ./node_modules/.bin/gulp "$@"

    elif [ "$1" == "yarn" ]; then
        shift 1
        $COMPOSE run --rm \
            -w /var/www/html \
            node \
            yarn "$@"

    else
        $COMPOSE "$@"
    fi
else
    $COMPOSE ps
fi