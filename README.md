
# TestWork2479282
## Задание
Необходимо создать проект на Laravel (REST API), только Backend! Предметная область для данных на Ваше усмотрение. Особенности реализации:

1. Проект содержит базу данных из двух таблиц со связью многие ко многим;
2. Работа с базой должна осуществляться через паттерн репозиторий;
3. Необходимо реализовать простую аутентификацию через ключ (не используя доп. пакеты passport, jwt etc.);
4. API должно предоставлять доступ к данным с возможностью сортировки и поиску по нескольким полям;
5. В процессе работы с данными необходимо использовать атрибут pivot для моделей и включить его в запросы по поиску.

В качестве результата ссылка на GitLab/GitHub/Bitbucket на выбор, сам репозиторий назвать TestWork2479282
А также Postman-коллекция, README с описанием и необходимыми действиями для развертывания проекта.

## Необходимыми действиями для развертывания проекта.
1. Склонировать проект на локальну машину используя команду. 
- $ git clone https://github.com/KutsenkoIhor/TestWork2479282
2. В проекте создаем файл .env и из файла .env.example копируем содержимое в .env
3. В файле .env указываем даные для подключение к БД.
- DB_DATABASE=имя БД
- DB_USERNAME=пользователь
- DB_PASSWORD=пароль
4. Используем команду composer update для обновление зависомостей до последних версий и обновнелия Обновляет ваши зависимости до последних версий и обновляет composer.
- $ composer update
5. Используем команду php artisan migrate для создания миграй. (создаем таблицы в БД)
- $ php artisan migrate
6. Используем команду php artisan db:seed для автоматическое заполнения БД.
- $ php artisan db:seed
7. Используем команду php artisan serve для запуска тестового сервера.
- $ php artisan serve

## Описание

1. Для аутентификацию через ключ используется Bearer Token. Токен хранится в папке confit apitokens.php
- Authorization: Bearer fdxfsd78f8sdaf8sdf8s9sf89sd89
2. Для быстрых тестов можно использовать файл test.http в папке tmp.
3. Патерн репозиторий представленый следующими класами:
- CinemaMovieController
- CinemaMovieRepository
- and Interfaces CinemaMovieRepositoryInterface
4. API дает возможность:
- Посмотреть информацию по фильмах или кинотеатрах.
- Сделать сортировку по фильмах или кинотеатрах.
- Сделать поиск по фильму или кинотеатру.
- Сдделать поиск и по фильму и по кинотеатру одновременно.
