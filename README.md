<h1>AniCorp - Laravel Streaming Platform</h1>

## About
* Full **Laravel** Streaming Platform to watch Animes.
* Control Panel for admins to add new animes, delete animes, add eps, delete eps, update eps, update animes (CRUD).
* Developed to work with a video player API such as **Vimeo**, **YouTube API**, **Vonage**, **etc**.
* **MySql** Database.
* **TailWindCss** for Style Sheet.
* Slide system with **JavaScript**.
* **Git Flow** to control bugs, features, releases, versions.
* This project is still in development. Bugs are being fixed, new features are being developed, code improvement is being made.

## Run Steps
**Follow these steps line to line to run the project!**
* git clone https://github.com/agon-ny/anicorp.git
* cd anicorp
* composer install
* mv .env.example .env
* configure your database settings on **.env** file
* php artisan key:generate
* php artisan migrate:fresh
* php artisan storage:link
* php artisan serve

## Admin accounts 
* Run: php artisan migrate --seed on your terminal
* Email: **admin@gmail.com**
* Password: **password**
* Now, LogIn and enjoy :)

## Version
**0.2.0**