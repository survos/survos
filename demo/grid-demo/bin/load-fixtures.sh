#!/usr/bin/env bash
dbname=grid_demo
  echo "drop database if exists $dbname; create database $dbname; grant all privileges on database $dbname to main; " | sudo -u postgres psql
  echo "CREATE EXTENSION hstore; CREATE EXTENSION pg_trgm; CREATE EXTENSION pg_stat_statements" | sudo -u postgres psql -d $dbname
# this should be done in fixtures, especially when we move to new login
git clean -f migrations && bin/console make:migration
bin/console doctrine:migrations:migrate -n

bin/console doctrine:fixtures:load -n

