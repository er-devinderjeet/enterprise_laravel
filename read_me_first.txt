config enterprise_db, root, 12345s

Create Controller, Model and Migrate
php artisan make:controller NamesController --resource

php artisan make:controller SharesController --resource

php artisan make:model Name -m

php artisan make:model Share -m
php artisan migrate

---------------------------------------------------------
php artisan route:list
------------------------------------------------------
php artisan tinker
-------------------------------------------------------------------

form
larvelcollective.com







////////////////////

index - list of all products
create
store
edit
update
show - detail individual/single product
delete