#!/bin/sh
php init --env=Development --overwrite=All
php yii migrate/up --interactive=0