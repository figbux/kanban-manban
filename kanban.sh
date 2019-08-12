#!/bin/bash
#cd path/to/kanban.sh 
php -S localhost:8081 &
chromium --app=http:/localhost:8081 &
