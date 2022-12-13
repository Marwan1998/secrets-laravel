# First Laravel App [Secrets-App]

## About Secrets

this small project only keeps user's secrets,

Each user may add, edit and delete secrets from their secrets cards.

#### This first project is for learning purposes.
## 
### I implemented what I learned in Laravel such as:

- Controllers
- Routes
- Views
- blade templets
- Models
- Database
- Session
- Middlewares
- Simple authentication
- Hashing
- Migration and seeders
- etc

### for setting the database and seeds with data:
- create database 'secretsDB'
- run:
```
php artisan migrate
```
- seed with data:
```
php artisan db:seed --class=AddUsers
php artisan db:seed --class=SecretsSeeder
```

- pre-registered users with data saved:

username: 'mg'
pass: '123'

username: 'user-3'
pass: '111'
