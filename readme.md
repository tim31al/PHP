#hw

##hw-1

Домашнее задание
Готовим окружение
Цель: Познакомиться с различными типами организации окружения.
Осознать их применимость и необходимость.
Научиться настраивать рабочее окружение для своих проектов с использованием автоматизации.

Это домашнее задание посвящено 1 части 1 модуля (занятия 1-3). Делайте его постепенно, от занятия к занятию. Сдавать можно как постепенно, так и "всё сразу".

###hw-1-1
К уроку 1.

####task1&2
1. Docker
1.1. Установить Docker себе на машину
1.2. С помощью Dockerfile настроить статический сайт (можно использовать nginx образ)

2. Виртуальные машины. Развернуть Homestead VM при помощи Vagrant и VirtualBox

####task3
3. Выберите в качестве примера свою текущую компанию (или компанию, в которой хотите работать), коротко опишите ее (количество сотрудников, сфера, приоритеты)
Сравните целесообразность разворачивания своей инфраструктуры или аренды публичного облака (можно выбрать любого провайдера)

----

###hw-1-2
К уроку 2

####task1
1. Написать консольное приложение (bash-скрипт), который принимает два числа и выводит их сумму в стандартный вывод.
Если предоставлены неверные аргументы (для проверки на число можно использовать регулярное выражение) вывести ошибку в консоль.

- числа для суммирования могут быть отрицательными и вещественными
- если Вы запускаете скрипты на базе Docker под Windows 10, то поведение функции sort по умолчанию отличается от стандартного в linux (числа сортируются как числа, а не как строки)

####task2
2. Имеется таблица следующего вида:

id user city phone
1 test Moscow 1234123
2 test2 Saint-P 1232121
3 test3 Tver 4352124
4 test4 Milan 7990923
5 test5 Moscow 908213

Таблица хранится в текстовом файле.

Вывести на экран 3 наиболее популярных города среди пользователей системы, используя утилиты Линукса.

Подсказка: рекомендуется использовать утилиты uniq, awk, sort, head.

----

###hw-1-3
К уроку 3

####task1
1. Необходимо установить любое расширение через pecl и через make (xdebug, redis)
- прислать скриншот команды pecl list, где должно значиться расширение + вывод функции `php -i | grep "ваше расширение"`
- прислать вывод команды make, т.е. `make > make_output.txt` + вывод функции `php -i | grep "ваше расширение"`

####task2
2. Необходимо создать свой пакет, и выложить в git и/или на packagist.org
- прислать команду для клонирования с гита
- прислать команду для установки через composer

####task3
3. Создать Docker-образ для работы
Необходимо создать образ, который будет включать:
- образ php, берем с https://hub.docker.com/_/php/
- необходимые утилиты (git, curl, wget, grep...)
- установленный composer
- установленные расширения redis, memcached, pecl_http, pdo_pgsql
Критерии оценки: Урок 1 - 4 балла
Урок 2 - 3 балла
Урок 3 - 3 балла

1. Каждый RUN в Dockerfile будет создавать промежуточный образ при сборке. Помните об этом. Желательно снизить их использование до минимума.
2. Пакет должен соответствовать PSR-4


##hw-2

Домашнее задание
Веб-серверы и логика
Цель: Научиться создавать приложения, которые запускают и работают в экосистеме контейнеров.
Исследовать возможность общения скриптов через механизм сокетов.
Научиться работать с базовыми средствами исследования уязвимостей инфраструктуры.

Это домашнее задание посвящено 2 части 1 модуля (занятия 4-5). Делайте его постепенно, от занятия к занятию. Сдавать можно как постепенно, так и "всё сразу".

###hw-2-1
К уроку 4

####task1
1. Используя Docker, вы описали сборку двух контейнеров – один с nginx, второй – с php-fpm и вашим кодом.
Используя docker-compose вы запускаете оба контейнера.
Контейнер с nginx пробрасывает 80 порт на вашу хостовую машину и ожидает соединений.
Клиент соединяется, и шлёт следующий HTTP-запрос:

POST / HTTP/1.1

string=(()()()()))((((()()()))(()()()(((()))))))

String - это POST-параметр, который можно проверять:

1.1. [ обязательно ] На длину и непустоту
1.2. [ по желанию ] На корректность кол-ва открытых и закрытых скобок

Все запросы с динамическим содержимым (*.php) nginx, используя директиву fastcgi_pass, проксирует в контейнер с php-fpm и вашим кодом.
Nginx должен обрабатывать запросы не обращая внимания на директиву Host. После обработки,
• если строка корректна, то пользователю возвращается ответ 200 OK, с информационным текстом, что всё хорошо;
• если строка некорректна, то пользователю возвращается ответ 400 Bad Request, с информационным текстом, что всё плохо.

####task2
2. Создать логику, размещаемую в двух контейнерах (server и client), объединённых общим volume. Скрипты запускаются в режиме прослушивания STDIN и обмениваются друг с другом вводимыми сообщениями через unix-сокеты.

----

###hw-2-2
К уроку 5

####task1
1. Приложение верификации email

1.1. Реализовать приложение (сервис/функцию) для верификации email.
1.2. Реализация будет в будущем встроена в более крупное решение.
1.3. Минимальный функционал - список строк, которые необходимо проверить на наличие валидных email.
1.4. Валидация по регулярным выражения и проверке DNS mx записи, без полноценной отправки письма-подтверждения.

####task2
2. Создать как минимум три машины/контейнера
2.1. Балансировщик nginx-upstream
2.2. Балансируемые бэкенды на nginx+php-fpm
Критерии оценки: К уроку 4 - 6 баллов
К уроку 5 - 4 балла

1. Строка в примере - только пример. На тестах она должна быть любой
2. Соответствие скобок должно быть и с точки зрения скобок. Тест ")(" не должен проходить
3. Конструкции @ и die неприемлемы. Вместо них используйте исключения
4. С точки зрения логики веб-сервиса ответ 400 - это валидное завершение работы скрипта
5. В рамках одной машины (без сетевого соединения) сборка LNMP гораздо быстрее работает при соединении FPM и Nginx через socket. Плюс за использование именно такой настройки.
6. Принимается только Unix-сокет
7. Код здесь и далее мы пишем с применением ООП
8. Код здесь и далее должен быть конфигурируем через файлы настроек типа config.ini
9. Желательно иметь возможность лёгкого расширения правил верификации дополнительными средствами.
10. Проверка MX-записи должна производиться встроенными средствами PHP
11. Каждая балансируемая нода должна выводить свой IP, чтобы клиент видел, на какую ноду он пришёл.
12. Обратите внимание на паттерн FrontController (он же - единая точка доступа). Все приложения, которые Вы создаёте здесь и далее должны вызываться через один файл index.php, в котором есть ТОЛЬКО

1. Точка входа - app.php
2. Сервер и клиент запускаются командами

php app.php server
php app.php client

3. В app.php только строки

require_once('/path/to/composer/autoload.php');

try {
$app = new App();
$app->run();
}
catch(Exception $e){

}

4. Логика чтения конфигураций и работы с сокетами - только в классах.
