DEBUG ENTITY KFT próba feladat


1. Letöltés a githubról.

2. parancssorban: composer install

3. létre kell hozni egy mysql adatbázis, ezt a .env fileban kapcsolni a laravel applikációval.

4. parancssorban: php artisan migrate

5. majd futtatni: php artisan serve

6. /docs útvonalon olvasható az API\AuthController és a benne található funkciók leírása.
7. a postman-ban tesztelhető az API:

   http://127.0.0.1:8000/api/register (name, email, password),
   http://127.0.0.1:8000/api/login (name, email),
   http://127.0.0.1:8000/api/logout,
   http://127.0.0.1:8000/api/refresh

