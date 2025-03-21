#!/bin/bash

# Пороговое значение для потребления памяти в процентах
MEMORY_THRESHOLD=80

# Имя сервиса, который нужно перезапустить
SERVICE_NAME="laravel-worker"

# Проверка потребления памяти
MEMORY_USAGE=$(free -m | awk 'NR==2{printf "%.2f", $3*100/$2 }')

if (( $(echo "$MEMORY_USAGE > $MEMORY_THRESHOLD" | bc -l) )); then
    # Перезапуск сервиса
    echo "Перезапуск сервиса $SERVICE_NAME из-за превышения порогового значения памяти"
    sudo systemctl restart $SERVICE_NAME
fi