#!/bin/bash
cd /home/as/Documents/kanban
php -S localhost:8081 &
chromium --app=http:/localhost:8081 &
