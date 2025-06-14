# TruckIt Assignment

This is a Laravel-based web application for managing truck-related operations.

## Prerequisites

- PHP >= 8.1
- Composer
- Node.js & NPM
- MySQL or any other supported database
- XAMPP (or similar local development environment)

## Installation

1. Clone the repository:
```bash
git clone https://github.com/rabigorkhali/truckit-assignment
cd rabi-gorkhaly-truckit-assignment
```

2. Install PHP dependencies:
```bash
composer install
```

3. Install NPM dependencies:
```bash
npm install
```

4. Create a copy of the environment file:
```bash
cp .env.example .env
```

5. Generate application key:
```bash
php artisan key:generate
```

6. Configure your database in the `.env` file:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

7. Run database migrations:
```bash
php artisan migrate
```

8. Start the development server:
```bash
php artisan serve
```

9. In a separate terminal, start Vite development server:
```bash
npm run dev
```

The application should now be running at `http://localhost:8000`

## Testing

### Running Tests

To run the test suite:

```bash
php artisan test
```

For specific test files:

```bash
php artisan test --filter=TestName
```


