# CodeIgniter 4 Application Muslim Basic

## Way to run?

run tailwind css `npx tailwindcss -i ./src/css/input.css -o ./public/assets/tailwind/css/output.css --watch`
run CI4 `php spark serve`.

## How to run migrate?

run migrate to create a table use migrate one table `php spark migrate -g databaseName -n "date_time_file_App\Database\Migrations\className"`
or migrate all table `php spark migrate`.

## How to run seeds?

run seeds to fill in the data in the table use `php spark db:seed className` in terminal.

## If error database

Clear port database on `.env` file if the database cannot be accessed for example `database.default.port =`.
