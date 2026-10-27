# Laravel Multi-Relation CRUD Demo

A small Laravel CRUD project for experimenting with model relationships and database-backed forms. The current README documents SQLite as the default database and Laravel's migration/seed workflow.

## Requirements

- PHP version supported by this repository's Laravel version
- Composer
- Node.js/npm only if frontend assets need to be built

## Install and run

```bash
composer install
php artisan key:generate
php artisan migrate --seed
php artisan serve
```

Open [http://localhost:8000](http://localhost:8000).

If the repository does not already contain a usable local environment file, copy the example configuration first:

```bash
cp .env.example .env
```

Configure database credentials locally before running migrations. The project README indicates SQLite is the default; check `config/database.php` and the current environment configuration before switching databases.

## Notes

- The migration/seed command may create or populate local development data.
- Do not commit a real `.env` file, application key, database password, or production credentials.
- Review Laravel, PHP, and Composer dependency versions before deploying.
- Add validation, authorization, tests, and production configuration before using this demo with real data.
