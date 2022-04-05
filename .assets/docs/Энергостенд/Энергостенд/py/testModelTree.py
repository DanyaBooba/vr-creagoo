import json
import requests
import time

step = 0;

while True:
        response = requests.get("http://192.168.0.101:8004/JSONGreenCity/ModelTree")
        items = json.loads(response.text)

        step=step+1
        print("Step = " + str(step))
        print("ElementsOK = " + str(items["ElementsOK"]))
        print("Lamp1val = " + str(items["Lamp1val"]))
        print("Lamp2val = " + str(items["Lamp2val"]))
        print("TreeOK = " + str(items["TreeOK"]))
        print("Windval = " + str(items["Windval"]))
        print("RootNode = " + str(items["RootNode"]))

        items2 = json.loads("{\"GeneratedPower\": \"test\"}")
        print("GeneratedPower = " + str(items2["GeneratedPower"]))
        
        print("---------")

        time.sleep(5) # 5 sec pause
