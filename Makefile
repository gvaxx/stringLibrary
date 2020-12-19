all: install test

install:
	composer install
test:
	./vendor/phpunit/phpunit/phpunit StringLibraryTest.php 