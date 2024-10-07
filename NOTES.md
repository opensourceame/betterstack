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
  - status (active, inactive, deleted)
  - updated_at
  - deleted_at
* writing a JS function to sort the table is reinventing the wheel, there are many existing libraries for this
* project could do with some unit testing
* no controllers - this makes it more complicated for tasks like displaying validation errors on the form


## Notes

* I didn't do much extra styling as I don't think there's much that can be done to make a form and table appealing on the page.
  Ideally the form should be displayed by popping up a modal or unhiding the form when you click an "add" button.
* I realised only towards the end that I hadn't implemented the form submission in an AJAX way.  That adds a fair amount of
  complexity which I didn't have time for.
* I didn't include validation on the names to check for stuff like numbers.  You never know when Elon Musk is going to come
  along and name his kid something that breaks all name validation.
* Validating the length of strings could also be done for all fields, as done in the phone number. I assume that doing it
  for one field is sufficient for demo purposes.
* I added example PHPUnit tests, but didn't have enough time to set up a test environment, they're just an indication of what could be done.
* I added a unique index on the email column to prevent duplicate accounts with the same email, however some error handling would
  be required in the case that a duplicate was added in the form.