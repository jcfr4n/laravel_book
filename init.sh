#!/bin/bash

ENV_FILE="./docker/.env.docker"

# Nombre y password de usuario de la base de datos
DB_USERNAME="dbuser"
DB_PASSWORD="dbuser"
DB_ROOT_PASSWORD="root"

# Detectar nombre del directorio actual
CURRENT_DIR=$(basename "$PWD")

echo "Levantando contenedores sin rebuild..."
docker-compose --env-file "$ENV_FILE" up -d
echo ""
echo "Contenedores levantados. Laravel estará disponible en http://localhost:8000"
echo ""
echo "Para acceder a la base de datos MySQL, usa los siguientes datos:"
echo "  - Host: ${CURRENT_DIR}.localhost"
echo "  - Puerto: 3306"
echo "  - Usuario: ${DB_USERNAME}"
echo "  - Contraseña: ${DB_PASSWORD}"
echo "  - Base de datos: ${CURRENT_DIR}"
echo ""
echo "Para acceder a phpMyAdmin, usa los siguientes datos:"
echo "  - URL: http://${CURRENT_DIR}.localhost:8080"
echo "  - Usuario: ${DB_USERNAME}"
echo "  - Contraseña: ${DB_PASSWORD}"
echo ""
echo "Para acceder al servicio de mailpit, usa los siguientes datos:"
echo "  - URL: http://${CURRENT_DIR}.localhost:8025"
echo ""
echo "Para detener los contenedores, usa: docker-compose down"