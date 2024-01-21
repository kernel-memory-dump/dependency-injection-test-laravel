# Laravel Dependency Injection Proof of Concept

This Laravel project is a simple proof of concept demonstrating the usage of dependency injection in Laravel controllers. It showcases how to create a service, define an interface for the service, and inject the service into a controller.

## Project Structure

```
/your-laravel-project
|-- app
|   |-- Contracts
|   |   |-- IDemoService.php
|   |-- Http
|   |   |-- Controllers
|   |   |   |-- Controller.php
|   |   |   |-- UserController.php
|   |-- Providers
|   |   |-- AppServiceProvider.php
|   |-- Services
|   |   |-- DemoService.php
|-- routes
|   |-- web.php
|-- ...
```

## Getting Started

1. Install dependencies:

   ```bash
   composer install
   ```

2. Copy the `.env.example` file to `.env` and configure your database settings (OPTIONAL for just the demo api route).

   ```bash
   cp .env.example .env
   ```

3. Generate the application key (OPTIONAL for just the demo api route):

   ```bash
   php artisan key:generate
   ```

4. Run the migrations (OPTIONAL for just the demo api route):

   ```bash
   php artisan migrate
   ```

5. Serve the application:

   ```bash
   php artisan serve
   ```

## Usage

1. Open your browser and navigate to [http://localhost:8000/api/test-demo-service](http://localhost:8000/api/test-demo-service).

2. The endpoint is handled by the `UserController` which injects the `IDemoService`. The `DemoService` class implements the `IDemoService` interface. The response will demonstrate the interaction between the controller and the service.

## Files Explanation

- **`app/Contracts/IDemoService.php`**: Defines the `IDemoService` interface.
- **`app/Services/DemoService.php`**: Implements the `IDemoService` interface.
- **`app/Http/Controllers/UserController.php`**: Handles the `/test-demo-service` route and injects the `IDemoService`.
- **`app/Providers/AppServiceProvider.php`**: Registers the service in the Laravel service container.
- **`routes/web.php`**: Defines the route for the proof-of-concept.

