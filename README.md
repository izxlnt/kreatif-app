# Kreatif App

A modern web application built with Laravel framework, providing a robust foundation for creative projects and business solutions.

## Introduction

Kreatif App is a Laravel-based web application designed to streamline creative workflows and project management. Built with modern web technologies including Laravel 11, Vite, and Tailwind CSS, this application provides a solid starting point for building scalable and maintainable web solutions.

### Key Features

- **Laravel 11 Framework** - Latest Laravel features and security updates
- **Modern Frontend Stack** - Vite for fast builds and hot module replacement
- **Tailwind CSS** - Utility-first CSS framework for rapid UI development
- **Multi-language Support** - Built-in support for English and Malay languages
- **Testing Suite** - Comprehensive PHPUnit tests for feature and unit testing
- **Cache Management** - Optimized caching strategies for better performance

## Important Notes

⚠️ **Before You Begin:**

- This application requires PHP 8.2 or higher
- Node.js 18.x or higher is required for frontend asset compilation
- Make sure you have Composer installed globally
- Ensure your web server has proper write permissions for `storage/` and `bootstrap/cache/` directories
- The application includes utility scripts (`fix-permissions.php`, `clear-cache.php`, `clear-all.php`) for maintenance tasks

📝 **Development Notes:**

- This project uses Vite instead of Laravel Mix for asset compilation
- Frontend assets are located in `resources/css/` and `resources/js/`
- Language files support both English (`lang/en/`) and Malay (`lang/ms/`)
- Custom utility scripts are available in the `public/` directory for cache management

## Early Configuration

### Prerequisites

Ensure you have the following installed on your system:

```bash
# Check PHP version (requires 8.2+)
php -v

# Check Composer
composer -V

# Check Node.js version (requires 18.x+)
node -v

# Check npm
npm -v
```

### Initial Setup

1. **Clone the repository**
   ```bash
   git clone <repository-url>
   cd kreatif-app
   ```

2. **Install PHP dependencies**
   ```bash
   composer install
   ```

3. **Install Node.js dependencies**
   ```bash
   npm install
   ```

4. **Environment configuration**
   ```bash
   # Copy the environment file
   cp .env.example .env
   
   # Generate application key
   php artisan key:generate
   ```

5. **Configure your database**
   
   Edit `.env` file and update database credentials:
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=kreatif_app
   DB_USERNAME=your_username
   DB_PASSWORD=your_password
   ```

6. **Run database migrations**
   ```bash
   php artisan migrate
   ```

7. **Fix permissions** (Linux/Mac)
   ```bash
   # Using the included fix script
   php fix-permissions.php
   
   # Or manually
   chmod -R 775 storage bootstrap/cache
   chown -R www-data:www-data storage bootstrap/cache
   ```

8. **Build frontend assets**
   ```bash
   # For development
   npm run dev
   
   # For production
   npm run build
   ```

9. **Start the development server**
   ```bash
   php artisan serve
   ```

   Your application should now be accessible at `http://localhost:8000`

### Additional Configuration

#### Cache Configuration

The application includes several cache management utilities:

- **Clear all caches**: Access `public/clear-all.php` or run `php artisan optimize:clear`
- **Clear specific cache**: Access `public/clear-cache.php`
- **Application cache**: Run `php artisan cache:clear`
- **Route cache**: Run `php artisan route:cache`
- **Config cache**: Run `php artisan config:cache`
- **View cache**: Run `php artisan view:cache`

#### Queue Configuration

If you plan to use queues:

```bash
# Update .env
QUEUE_CONNECTION=database

# Run migrations if not done
php artisan migrate

# Start queue worker
php artisan queue:work
```

#### Mail Configuration

Update your `.env` file with mail settings:

```env
MAIL_MAILER=smtp
MAIL_HOST=your-smtp-host
MAIL_PORT=587
MAIL_USERNAME=your-username
MAIL_PASSWORD=your-password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=noreply@yourapp.com
MAIL_FROM_NAME="${APP_NAME}"
```

## Development Workflow

### Running Tests

```bash
# Run all tests
php artisan test

# Run specific test suite
php artisan test --testsuite=Feature
php artisan test --testsuite=Unit
```

### Asset Compilation

```bash
# Watch for changes (development)
npm run dev

# Build for production
npm run build
```

### Code Quality

```bash
# Run PHP CS Fixer (if configured)
./vendor/bin/php-cs-fixer fix

# Run PHPUnit
./vendor/bin/phpunit
```

## Project Structure

- `app/` - Application core (Models, Controllers, Middleware)
- `resources/` - Views, frontend assets (CSS, JS)
- `routes/` - Application routes
- `database/` - Migrations, seeders, factories
- `tests/` - Automated tests
- `config/` - Configuration files
- `public/` - Public web directory
- `storage/` - Application storage (logs, cache, uploads)

## Troubleshooting

**Permission Issues:**
```bash
php fix-permissions.php
```

**Cache Issues:**
```bash
php artisan optimize:clear
# Or visit: public/clear-all.php
```

**Asset Compilation Issues:**
```bash
rm -rf node_modules package-lock.json
npm install
npm run build
```

## License

This project is licensed under the MIT License.

## Support

For issues and questions, please create an issue in the repository or contact the development team.