# Distance
Пакет предназначен для расчета расстояния между координатами 

### Quickstart

Подключить пакет можно с помощью composer:
```#!bash
composer require evro23x/distance 
```
### Example

Пример использования в проекте
```#!bash
use evro23x\Distance;

$lat1 = 55.7414955;
$long1 = 37.6050417;
$lat2 = 55.7387655;
$long2 = 37.6121013;

$result = Distance::calculateTheDistance($lat1, $long1, $lat2, $long2);

echo "Расстояние между координатами $lat1,$long1 и $lat2,$long2 равно $result метра(ов)\n";
```