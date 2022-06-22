# test_task

# 1. Скопируйте все файлы репозитория в корневую директорию сервера (в папку сайта).

# 2. Отредактируйте файл дампа БД и импортируйте в свою БД (test_wp.sql):

  Вариант 1: 
  Откройте файл в блокноте или любом текстовом редакторе
  Найдите строку (1, 'siteurl', 'http://localhost/wp_test', 'yes')
  Замените по всему файлу http://localhost/wp_test на Ваш новий домен
  Зайдите в Вашу БД на хостинге и импортируйте измененную БД
  
  Вариант 2:
  Зайдите в Вашу БД на хостинге и импортируйте БД test_wp.sql
  Далее  В phpMyAdmin находится вкладка «SQL», на которой в предназначенное для ввода данных поле вносятся приведённые ниже запросы. 
  Замените старый домен на новый http://localhost/wp_test и ВАШ_ДОМЕН - предыдущий и новый адреса сайта:

  UPDATE wp_options SET option_value = replace(option_value, 'http://localhost/wp_test', 'ВАШ_ДОМЕН') WHERE option_name = 'home' OR option_name = 'siteurl';

  UPDATE wp_posts SET guid = replace(guid, 'http://localhost/wp_test','ВАШ_ДОМЕН');

  UPDATE wp_posts SET post_content = replace(post_content, 'http://localhost/wp_test', 'ВАШ_ДОМЕН');

# 3. Измените подключение к БД в файле wp-config.php на вашем хостинге

  define( 'DB_NAME', 'ИМЯ_ВАШЕЙ_БД' );

  /** Database username */
  define( 'DB_USER', 'ПОЛЬЗОВАТЕЛЬ_ВАШЕЙ_БД' );

  /** Database password */
  define( 'DB_PASSWORD', 'ПАРОЛЬ_ВАШЕЙ_БД' );

  /** Database hostname */
  define( 'DB_HOST', 'ХОСТ_ВАШЕЙ_БД' );
  
# Доступ в алмин панель

  логин - administrator
  пароль - admin12345
  
