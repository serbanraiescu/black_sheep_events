# Black Sheep Events - Foundation

This is the Laravel 12 foundation for Black Sheep Events, prepared for custom UI integration from Google Stitch.

## cPanel Deployment (Shared Hosting)

This project is configured for a specific cPanel structure where the Laravel core remains isolated from the public web root for security.

### 🏠 Environment Structure
- **Laravel Core**: `/home/dyxpkare/black_sheep_events`
- **Public Web Root**: `/home/dyxpkare/public_html`

### 🚀 Deployment Steps

1.  **Code Upload**:
    - Pull or upload the entire project into `/home/dyxpkare/black_sheep_events`.
    - Ensure the `vendor` folder is present (run `composer install` locally if needed before upload).

2.  **Public Entrance**:
    - Copy all files and folders from `/home/dyxpkare/black_sheep_events/public/` directly into `/home/dyxpkare/public_html/`.
    - **Crucial**: This includes the `build` folder (compiled assets) and the `.htaccess` file.

3.  **Path Verification**:
    - Open `/home/dyxpkare/public_html/index.php`.
    - It is already pre-configured to point to the core folder, but verify these lines:
      ```php
      require __DIR__.'/../black_sheep_events/vendor/autoload.php';
      $app = require_once __DIR__.'/../black_sheep_events/bootstrap/app.php';
      ```

4.  **Configuration**:
    - Create or update `/home/dyxpkare/black_sheep_events/.env` with your production database credentials.
    - Set `APP_URL=https://your-domain.ro` to ensure assets load correctly.

5.  **Permissions**:
    - The following directories in the core folder must be writable by the web server:
      - `storage/`
      - `bootstrap/cache/`

6.  **Storage Link (Manual)**:
    - Since you may not have SSH access, create a symlink named `storage` inside `public_html` that points to `/home/dyxpkare/black_sheep_events/storage/app/public`.

## Local Development

1. `composer install`
2. `npm install`
3. `php artisan migrate --seed`
4. `npm run dev`

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework. You can also check out [Laravel Learn](https://laravel.com/learn), where you will be guided through building a modern Laravel application.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Redberry](https://redberry.international/laravel-development)**
- **[Active Logic](https://activelogic.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
