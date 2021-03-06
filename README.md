## Setup

laravel composer install.

```
composer require laravel/laravel
```

node package install for vue

```
npm install
```

## Running

```
php artisan key:generate
php artisan serve

npm run dev //(watch, hot)
npm run production //(for production)
```

## Unit Testing

```
php artisan test --testsuite=Unit --stop-on-failure
```

## Project Structure

### - Backend(Laravel)

- App/Http/Controllers/HomeController.php -> show home view
- App/Http/Controllers/Api/AffiliateController.php -> responsible for Affiliates
- App/Classes/Affiliates.php -> responsible for making affiliate array from JSON and filtering them by distance.
- App/Helpers/Helper.php -> define some helper functions.
- Config/gambling.php -> config variables of this project.
- Routes/web.php -> register api for web// Route::get('/{any}', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->where('any', '.\*');
- Routes/api.php -> register api

  ```
  Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
      return $request->user();
  });

  Route::get('/v1/affiliates', [AffiliateController::class, 'getAffiliates']);
  ```

### - Frontend(Vue)

- resources/js/views -> main page vue components
- resources/js/service/service.api.js -> axios api functions
- resources/js/service/service.function.js -> some helper functions in frontend side
- resources/store -> define store(mutation, state, action, getter)
- resources/components -> define reusable components.
- resources/routes.js -> define vue routes
- resources/assets/sass -> define sass

### - affiliates repository file path

```
storage/app/affiliates.txt
```
