# Makefile

PHP_CONTAINER=php-container

exec:
	docker compose exec $(PHP_CONTAINER) $(cmd)
	