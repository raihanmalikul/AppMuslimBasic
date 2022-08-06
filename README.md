# CodeIgniter 4 Application Muslim Basic

## Way to run?

run tailwind css `npx tailwindcss -i ./src/css/input.css -o ./public/assets/tailwind/css/output.css --watch`

run CI4 `php spark serve`.

## How to run migrate?

Run migrate to create a table use migrate one table `php spark migrate class_Name"` or migrate all table `php spark migrate`.

Run `php spark migrate:refresh` to perform table repairs.

## How to run seeds?

Run seeds to fill in the data in the table use `php spark db:seed className` in terminal.

Run `php spark db:seed AddDataSeeder` to populate the data back into the table.

## If error database

Clear port database on `.env` file if the database cannot be accessed for example `database.default.port =`.

## Referensi

[Documentation Codeigniter 4](https://www.codeigniter.com/user_guide/index.html).

[Documentation Laravel Mix](https://laravel-mix.com/docs/6.0/installation).

[Documentation Tailwindcss 3](https://tailwindcss.com/docs/installation).

[Documentation Tailwind Elements](https://tailwind-elements.com/).

[Documentation Bootstrap 5](https://getbootstrap.com/docs/5.0/getting-started/introduction/).

[Template Admin](https://adminkit.io/).
