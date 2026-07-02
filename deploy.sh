#!/bin/bash
set -e

echo "🚀 Starting deployment..."

# 1. Pull the latest version of the repository
echo "📥 Pulling latest commits from GitHub..."
git pull origin main

# 2. Setup environment configuration
if [ ! -f .env ]; then
    echo "📄 Creating .env file from .env.example..."
    cp .env.example .env
    echo "🔑 Generating Application Key..."
    php artisan key:generate
else
    # Check if APP_KEY is empty in existing .env
    if grep -q "APP_KEY=$" .env || ! grep -q "APP_KEY" .env; then
        echo "🔑 Generating Application Key..."
        php artisan key:generate
    fi
fi

# 3. Install composer PHP dependencies for production
echo "📦 Installing PHP dependencies..."
composer install --no-interaction --prefer-dist --optimize-autoloader --no-dev

# 4. Create relative storage link using ln -s
echo "🔗 Re-linking public/storage..."
rm -f public/storage
ln -sf ../storage/app/public public/storage

# 5. Run database migrations
echo "🗄️ Running migrations..."
php artisan migrate --force

# 6. Clear and cache config, routes, and views for optimal performance
echo "⚡ Caching configurations..."
php artisan config:cache
php artisan route:cache
php artisan view:cache

# 7. Set correct permissions for web server
echo "🔑 Restoring folder permissions..."
chmod -R 775 storage bootstrap/cache

echo "🎉 Deployment completed successfully!"
