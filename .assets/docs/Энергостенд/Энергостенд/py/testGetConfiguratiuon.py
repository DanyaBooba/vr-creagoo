import json
import requests
import time

step = 0;

while True:
        response = requests.get("http://192.168.0.101:8004/JSONGreenCity/GetConfiguration")
        items = json.loads(response.text)

        step=step+1
        print("Step = " + str(step))
        print("GameItteration = " + str(items["GameItteration"]))
        print("GameSpeed = " + str(items["GameSpeed"]))
        print("SplitBalancing = " + str(items["SplitBalancing"]))
        print("---------")

        time.sleep(5) # 5 sec pause
