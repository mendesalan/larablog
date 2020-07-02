

## Description

A basic sketch of a blog built in Vuejs & Laravel.



## How to run
**On root folder**:
- This application is dockerized so you can easily type: `docker-compose up -d --force-recreate`
- `php artisan migrate` to migrate the batabase.
- `php artisan db:seed` to seed the database.

The seed input the admin in database so make sure you run it.
If you're admin or login as admin you'll be able to see the import posts from the API.
There's also a create Post button.

There's a Post.vue component that are used on Home and Admin page, this way we could re-use the component.



