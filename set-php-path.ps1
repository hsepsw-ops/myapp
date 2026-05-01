$phpDir = 'C:\laragon\bin\php\php-8.2.0-Win32-vs16-x64'
$phpExe = Join-Path $phpDir 'php.exe'

if (-not (Test-Path $phpExe)) {
    Write-Error "PHP executable tidak ditemukan di: $phpExe"
    exit 1
}

$currentPath = [Environment]::GetEnvironmentVariable('Path', 'User')
if ($currentPath -match [regex]::Escape($phpDir)) {
    Write-Output "Path PHP sudah terdaftar di user PATH."
    exit 0
}

$newPath = if ([string]::IsNullOrWhiteSpace($currentPath)) {
    $phpDir
} else {
    "$currentPath;$phpDir"
}
[Environment]::SetEnvironmentVariable('Path', $newPath, 'User')
Write-Output "Berhasil menambahkan PHP ke user PATH. Tutup dan buka kembali terminal baru, lalu jalankan 'php -v'."
