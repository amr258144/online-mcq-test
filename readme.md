<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Step 1
Clone the Repository

## Step 2
If on mac/ubuntu, give permission to storage/* and bootstrap directory, enter this command
<br />
<code>sudo chmod -R 777 storage/*</code>
<br />
<code>sudo chmod -R 777 bootstrap/</code>
<br />
<code>sudo chmod -R 777 .env</code>

## Step 3
<code>php artisan key:generate</code>

## Step 4
Create database and write database name in .env file with all database credentials like host, root, password, DB name.

## Step 5
<p>Migrate the database</p>
<code>php artisan migrate</code>

## Step 6
If you want, then you can add the questions else here is the MySQL query to fill the tables with some records

<code>

INSERT INTO `questions` (`q_id`, `questions`, `created_at`) VALUES (NULL, 'PHP files have the default file extension of _____', CURRENT_TIMESTAMP), (NULL, 'A PHP script should start with ___ and end with ___', CURRENT_TIMESTAMP), (NULL, 'Which of these is PHP framework?', CURRENT_TIMESTAMP), (NULL, '5 + 5 = ?', CURRENT_TIMESTAMP), (NULL, 'SRK is an _______ ?', CURRENT_TIMESTAMP), (NULL, '2 * 2 = ?', CURRENT_TIMESTAMP), (NULL, 'Square of 5 is ?', CURRENT_TIMESTAMP), (NULL, 'Quotient of 70/10 is ___ .', CURRENT_TIMESTAMP), (NULL, '<?php echo "Hello"; ?>       Output of this would be?', CURRENT_TIMESTAMP), (NULL, 'Latest version of PHP?', CURRENT_TIMESTAMP);




INSERT INTO `questions_choices` (`qc_id`, `q_id`, `created_at`, `is_correct_choice`, `choice`) VALUES (NULL, '1', CURRENT_TIMESTAMP, '0', '.html'), (NULL, '1', CURRENT_TIMESTAMP, '1', '.php'), (NULL, '1', CURRENT_TIMESTAMP, '0', '.css'), (NULL, '1', CURRENT_TIMESTAMP, '0', '.js'), (NULL, '2', CURRENT_TIMESTAMP, '1', '<?php  ?>'), (NULL, '2', CURRENT_TIMESTAMP, '0', '<php  ?>'), (NULL, '2', CURRENT_TIMESTAMP, '0', '<  >'), (NULL, '2', CURRENT_TIMESTAMP, '0', '< php >'), (NULL, '3', CURRENT_TIMESTAMP, '0', 'Express'), (NULL, '3', CURRENT_TIMESTAMP, '0', 'Bootstrap'), (NULL, '3', CURRENT_TIMESTAMP, '1', 'Laravel'), (NULL, '3', CURRENT_TIMESTAMP, '0', 'None of these'), (NULL, '4', CURRENT_TIMESTAMP, '0', '5'), (NULL, '4', CURRENT_TIMESTAMP, '1', '10'), (NULL, '4', CURRENT_TIMESTAMP, '0', '25'), (NULL, '4', CURRENT_TIMESTAMP, '0', '0'), (NULL, '5', CURRENT_TIMESTAMP, '1', 'Actor'), (NULL, '5', CURRENT_TIMESTAMP, '0', 'Mimicry'), (NULL, '5', CURRENT_TIMESTAMP, '0', 'Writer'), (NULL, '5', CURRENT_TIMESTAMP, '0', 'None of these'), (NULL, '6', CURRENT_TIMESTAMP, '0', '8'), (NULL, '6', CURRENT_TIMESTAMP, '0', '0'), (NULL, '6', CURRENT_TIMESTAMP, '0', '10'), (NULL, '6', CURRENT_TIMESTAMP, '1', '4'), (NULL, '7', CURRENT_TIMESTAMP, '0', '10'), (NULL, '7', CURRENT_TIMESTAMP, '0', '5'), (NULL, '7', CURRENT_TIMESTAMP, '1', '25'), (NULL, '7', CURRENT_TIMESTAMP, '0', 'None of these'), (NULL, '8', CURRENT_TIMESTAMP, '1', '7'), (NULL, '8', CURRENT_TIMESTAMP, '0', '70'), (NULL, '8', CURRENT_TIMESTAMP, '0', '700'), (NULL, '8', CURRENT_TIMESTAMP, '0', 'None of these'), (NULL, '9', CURRENT_TIMESTAMP, '0', '<?php echo "hello"; ?>'), (NULL, '9', CURRENT_TIMESTAMP, '0', 'echo Hello'), (NULL, '9', CURRENT_TIMESTAMP, '1', 'Hello'), (NULL, '9', CURRENT_TIMESTAMP, '0', 'None of these'), (NULL, '10', CURRENT_TIMESTAMP, '0', 'PHP 5.1'), (NULL, '10', CURRENT_TIMESTAMP, '1', 'PHP 7'), (NULL, '10', CURRENT_TIMESTAMP, '0', 'PHP 5.2'), (NULL, '10', CURRENT_TIMESTAMP, '0', 'PHP 5');

</code>

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
