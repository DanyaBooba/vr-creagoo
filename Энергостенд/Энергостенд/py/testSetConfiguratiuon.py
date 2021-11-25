import json
import requests
import time

url = "http://192.168.0.101:8004/JSONGreenCity/SetConfiguration"

data = {"GameItteration": 500, "GameSpeed": 600, "SplitBalancing": True}
headers = {'Content-type': 'application/json', 'Accept': 'text/plain'}
r = requests.post(url, data=json.dumps(data), headers=headers)
print(str(r))
