# Laravel+Reverb+Breeze+Livewire+Sail Chat

Для того щоб запрацювала звʼязка Reverb+Sail довелося винести із вендора в корінь конфігурацію доке і додати в кінець файлу supervisord.conf оце:

[program:reverb]
command=php /var/www/html/artisan reverb:start --host="0.0.0.0" --port=8080
autostart=true
autorestart=true
user=%(ENV_SUPERVISOR_PHP_USER)s
redirect_stderr=true
stdout_logfile=/var/www/html/storage/logs/reverb.log

Також у docker-compose.yml додав у порти 

- '${REVERB_SERVER_PORT:-8080}:8080'

