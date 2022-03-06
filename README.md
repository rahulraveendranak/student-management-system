# Laravel Student Management System

This is a simple Student Management System.

This is built on Laravel Framework 9.

## Installation

Clone the repository-
```
git clone https://github.com/rahulraveendranak/student-management-system.git
```

Then cd into the folder with this command-
```
cd student-management-system
```

Then do a composer install
```
composer install
```

Then create a environment file using this command-
```
copy .env.example .env
```

Then edit `.env` file with appropriate credential for your database server. Just edit these two parameter(`DB_USERNAME`, `DB_PASSWORD`).

Then create a database named `student-management-system` and then do a database migration using this command-
```
php artisan migrate
```

Then seed some data to the database.
```
php artisan db:seed
```

At last generate application key, which will be used for password hashing, session and cookie encryption etc.
```
php artisan key:generate
```

## Run server

Run server using this command-
```
php artisan serve
```

Then go to `http://localhost:8000` from your browser and see the app.



## Screenshot

![Landing Page](https://github.com/rahulraveendranak/student-management-system/blob/main/screenshot/1.png)
![Student List Page](https://github.com/rahulraveendranak/student-management-system/blob/main/screenshot/2.png)
![Student Add Page](https://github.com/rahulraveendranak/student-management-system/blob/main/screenshot/3.png)
![Student Mark List Page](https://github.com/rahulraveendranak/student-management-system/blob/main/screenshot/4.png)
![Student Mark Edit Page](https://github.com/rahulraveendranak/student-management-system/blob/main/screenshot/5.png)
![STudent Edit Page](https://github.com/rahulraveendranak/student-management-system/blob/main/screenshot/6.png)
