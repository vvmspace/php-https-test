# PHP https test
Simple, but helpfull script. Just download or git clone it to your hosting or server.

## PHP тест https соединения

Скрипт написан после того, как был обнаружен неудачный хостинг, где сайт открывался по https://, однако переменная $_SERVER['HTTPS'] была пустой и сайт открывался по 80 вместо 443 порту. Такое поведение некорректно.

## Рекомендации по хостингу, если нормально работающий https необходим:


1.Возьмите себе сервер: http://www.simplecloud.ru/start/clouddat/

2.Установите туда lamp-server, настройте его и перевезите туда сайт.

3.Используйте letscencrypt в паре с certbot, который бесплатно выдаст Вам SSL сертификат на 3 месяца.

4.Пропишите в cron обновление сертификата раз в 3 месяца.

5.Profit


### P.S.: Не юзайте шаред-хостинги. Это стрёмно и не профессионально, да и ограничивает Вас в стеке разработки.