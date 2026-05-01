Push-Location $PSScriptRoot
$phpPath = 'C:\laragon\bin\php\php-8.2.0-Win32-vs16-x64\php.exe'
if (-not (Test-Path $phpPath)) {
    Write-Error "PHP executable not found: $phpPath"
    Pop-Location
    exit 1
}
& $phpPath artisan serve --host=127.0.0.1 --port=8000
Pop-Location
