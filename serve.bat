@echo off
cd /d "%~dp0"
set "PHP_PATH=C:\laragon\bin\php\php-8.2.0-Win32-vs16-x64\php.exe"
if not exist "%PHP_PATH%" (
    echo PHP executable not found: %PHP_PATH%
    exit /b 1
)
"%PHP_PATH%" artisan serve --host=127.0.0.1 --port=8000
