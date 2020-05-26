# phpunit_practice

First let us ensure that we have the php composer installed. Follow the below commands to install.

```console
example@example:~$ sudo apt-get update
example@example:~$ curl -sS https://getcomposer.org/installer | php
example@example:~$ sudo mv composer.phar /usr/local/bin/composer
example@example:~$ chmod +x /usr/local/bin/composer
example@example:~$ composer
```

This repository includes some functionalities written to practice unit testing in phpunit.

This is a small task done before writing a module in wordpress for the honeypot project and integrating tests in it.

In the [/app](https://github.com/chiragbablani0/phpunit_practice/tree/master/app) directory there consists of different directories which includes files of getter and setter functions used for the [/tests](https://github.com/chiragbablani0/phpunit_practice/tree/master/tests/unit).

The  [/tests](https://github.com/chiragbablani0/phpunit_practice/tree/master/tests/unit) consists the files of testing.

**How to use these files**

Just clone the repository and you will have the phpunit files in your local


And then in the phpunit_practice directory we will run:

```console
example@example:~$ ./vendor/bin/phpunit
```

OR just

```console
example@example:~$ phpunit
```

you can find different assertions which have passed the testing.

