run:
	docker-compose run --rm cli php src/main.php

bash:
	docker-compose run --rm cli bash

install:
	docker-compose run --rm cli composer install --no-scripts
	
update:
	docker-compose run --rm cli composer update --no-scripts
