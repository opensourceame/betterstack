## Activity log

* set up php, php-fpm, php-mysql
* update Caddy config
* install mysql-server 8.0
* mysql_secure_installation
* create database and user
* import db schema
* create migrations folder and add first migration
* create .env.dev file and set up database config
* run migrations
* update views index to add styling
* add a base model validator method that checks required fields for values
* add a User validator method
* add a controller, and move code appropriately
* handle posts to create users in controller
* display errors when validation fails
* add datatables library to sort + search table
* use previously posted params as default values on post failure
* add unit testing example
* validate email address
* fix horizontal form

## TODO

* router + ajax

## Observations

* requires a new column for the phone number, rather than editing the schema I thought it would be better to make it a dynamic migration
* other useful columns for the user table would be:
  * status (active, inactive, deleted)
  * updated_at
  * deleted_at
* writing a JS function to sort the table is reinventing the wheel, there are many existing libraries for this
* project could do with some unit testing
* no controllers - this makes it more complicated for tasks like displaying validation errors on the form
