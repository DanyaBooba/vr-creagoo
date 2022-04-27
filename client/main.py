##
## Скрипт клиента.
## Его задача: основной скрипт,
## который отрабатывает задачу подключения
## к энергостенду, получает от него файл json,
## в котором хранятся параметры о всех зданиях,
## загружает его на удаленный сервер vr.creagoo.ru.
##
## Авторство: Дыбка Даниил Викторович
## Почта: daniil@creagoo.com
## Сайт: creagoo.ru
##

#!/usr/bin/python3

import request as req
import json_local
import json
import time
import c

local_json = json_local.JSON
ip_energo = c.IP_ENERGO
ip = c.IP

timesleep = 3
load = True

link = "http://"+ip_energo+":"+ip+"/JSONGreenCity/ModelTree"
link_load = "https://vr.creagoo.ru/put/index.php?q="

def main():
    if load == False:
        print(local_json)
        return

    response = req.get(link)
    txt = response.txt
    print(txt)

    myjs = json.loads(txt)
    req.get(link_load + txt)

while 1:
    main()
    time.sleep(timesleep)
    