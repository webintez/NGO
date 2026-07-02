#!/bin/bash
set -e

echo "🚀 Starting deployment..."

# 1. Pull the latest version of the repository
echo "📥 Pulling latest commits from GitHub..."
git pull origin main

# 2. Install composer PHP dependencies for production
echo "📦 Installing PHP dependencies..."
composer install --no-interaction --prefer-dist --optimize-autoloader --no-dev

# 4. Run database migrations
echo "🗄️ Running migrations..."
php artisan migrate --force

# 5. Clear and cache config, routes, and views for optimal performance
echo "⚡ Caching configurations..."
php artisan config:cache
php artisan route:cache
php artisan view:cache

# 6. Set correct permissions for web server
echo "🔑 Restoring folder permissions..."
chmod -R 775 storage bootstrap/cache

echo "🎉 Deployment completed successfully!"
