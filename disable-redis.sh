#!/bin/bash
echo "🔄 Désactivation de Redis dans Laravel..."

# 1. Sauvegarder l'ancien .env
docker exec ehealth-app cp /var/www/html/.env /var/www/html/.env.backup

# 2. Remplacer toutes les occurrences de redis par file/sync
docker exec ehealth-app sed -i '
s/^CACHE_DRIVER=.*/CACHE_DRIVER=file/
s/^SESSION_DRIVER=.*/SESSION_DRIVER=file/
s/^QUEUE_CONNECTION=.*/QUEUE_CONNECTION=sync/
' /var/www/html/.env

# 3. Vider les caches
echo "🗑️  Nettoyage des caches..."
docker exec ehealth-app php artisan config:clear
docker exec ehealth-app php artisan cache:clear
docker exec ehealth-app php artisan view:clear
docker exec ehealth-app php artisan route:clear

# 4. Vérifier
echo "✅ Configuration finale :"
docker exec ehealth-app cat /var/www/html/.env | grep -E "CACHE_DRIVER|SESSION_DRIVER|QUEUE_CONNECTION"

echo ""
echo "🎉 Redis désactivé ! Rechargez http://localhost:8000"