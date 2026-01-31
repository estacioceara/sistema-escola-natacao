up:
	docker compose up -d

up_build:
	docker compose up -d --build

bash:
	docker compose exec php bash

<<<<<<< HEAD
down:
	docker compose down
=======
composer_install:
	docker compose exec -T php bash -c "composer install"

down:
	docker compose down

>>>>>>> origin/main
