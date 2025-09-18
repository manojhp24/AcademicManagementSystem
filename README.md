
# Academic Management System (Laravel + Tailwind)

## Description
A centralized system for managing students, faculty, courses, and results, built with Laravel, MySQL, and Tailwind CSS.

## Features
- Admin module for managing students, faculty, and courses
- Real-time data access
- Scalable and secure design
- Tailwind CSS UI

## Requirements
- PHP >= 8.x
- Composer
- Node.js & NPM/Yarn
- MySQL
- Laravel CLI

## Setup Instructions

1. **Clone the repository**
```bash
git clone https://github.com/yourusername/AcademicManagementSystem.git
cd AcademicManagementSystem
```
Note: To open the project in VS Code from the terminal, run:
```bash
code .
```
> **Tip:** To open the integrated terminal in VS Code, press:
Ctrl + ` (backtick) This lets you run commands like `npm install` or `php artisan serve` directly inside VS Code.Then execute the below steps


2. **Install PHP dependencies**
```bash
composer install
```

3.**Install Node dependencies and build assets**
```bash
npm install
npm run build
```

4. ** Set up environment**
```bash
cp .env.example .env
```
5. **Generate application key**
```bash
php artisan key:generate
```
6. **Run Migrations**
```bash
php artisan migrate
```
7.**Start development server**
```bash
php artisan serve
```
