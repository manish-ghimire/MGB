

## MGB Endpoints

Run the local development server by using this artisan command. "php artisan serve"


## Task1

Task1 is to return back the number of days in between two DateTime parameters

DATETIME Parameter format: YYYY-MM-DD HH:MM:SS
- Task1 returns back days difference: http://127.0.0.1:8000/api/days/DATETIME/DATETIME

Example:
Task1: [Link](http://127.0.0.1:8000/api/days/2021-01-01%2009:00:00/2021-12-31%2009:00:00)



## Task2

Task2 is to return back the number of complete weeks in between two DateTime parameters

DATETIME Parameter format: YYYY-MM-DD HH:MM:SS
- Task2 returns back weeks difference: http://127.0.0.1:8000/api/weeks/DATETIME/DATETIME

Example:
Task2: [Link](http://127.0.0.1:8000/api/weeks/2021-01-01%2009:00:00/2021-12-31%2009:00:00)


## Task3

Task3 allows user to pass in region, city and date/time in the URL and returns back the equivalent east australian standard time (AEST)

REGION Parameter (One of these): Africa, America, Antarctica, Arctic, Asia, Atlantic, Australia, Europe, Indian, Pacific
CITY Parameter: Can be seen in this [link](https://www.php.net/manual/en/timezones.php) and
Time Parameter: HH:MM:SS

- Task3 returns back the equivalent east australian standard time (AEST): http://127.0.0.1:8000/api/REGION/CITY/HH:MM:SS

Example: 
Task3: [Link](http://127.0.0.1:8000/api/Europe/Berlin/15:00:00)