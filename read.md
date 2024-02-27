

      cp .env.example .env
      sed -i "s#APP_URL=http://127.0.0.1:8000#APP_URL=$(gp url 8000)#g" .env
      composer install --ignore-platform-reqs
      php artisan key:generate
      php artisan storage:link
      touch database/database.sqlite
      php artisan migrate:fresh --seed


      SAIL

      cp .env.example .env
      sed -i "s#APP_URL=http://127.0.0.1:8000#APP_URL=$(gp url 8000)#g" .env
sail composer install --ignore-platform-reqs
sail php artisan key:generate
sail php artisan storage:link
sail touch database/database.sqlite
sail php artisan migrate:fresh --seed
