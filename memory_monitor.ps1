#Set-ExecutionPolicy Unrestricted -Scope CurrentUser -Force
# Пороговое значение для потребления памяти в процентах
$memoryThreshold = 80

# Имя сервиса, который нужно перезапустить
$serviceName = "testapp2"

# Получение текущего потребления памяти
$memoryUsage = (Get-WmiObject Win32_OperatingSystem).TotalVisibleMemorySize - (Get-WmiObject Win32_OperatingSystem).FreePhysicalMemory
$memoryUsagePercent = ($memoryUsage / (Get-WmiObject Win32_OperatingSystem).TotalVisibleMemorySize) * 100

Write-Output "Current memory usage: $memoryUsagePercent%!"

if ($memoryUsagePercent -gt $memoryThreshold) {
    # Перезапуск сервиса
    Write-Host "Restarting service: $serviceName to exceeding memory threshold!"
    Restart-Service -Name $serviceName -Force
}else{
   Write-Output "Service: $serviceName not exceeding memory threshold"
}