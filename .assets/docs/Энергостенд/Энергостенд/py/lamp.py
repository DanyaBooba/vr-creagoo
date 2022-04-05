import json
import requests
import time

while True:
        response = requests.get("https://iocontrol.ru/api/readData/izobretarium/id")
        items = json.loads(response.text)

        #print(items["check"])
        print(items["value"])
        #print(items["date"])
        #print(items["dateUnix"])
        #print(items["message"])
        #print(items["requestTime"])
        time.sleep(5) # 5 sec pause
