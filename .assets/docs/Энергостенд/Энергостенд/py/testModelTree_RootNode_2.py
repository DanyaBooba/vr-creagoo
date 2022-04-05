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
        #print("RootNode = " + str(items["RootNode"]))
        print("------------------------------------------------")
        print("GeneratedPower = " + str(items["RootNode"]["GeneratedPower"]))  
        print("RequiredPower = " + str(items["RootNode"]["RequiredPower"]))  


        print("Lines ------------------------------------------------")
        print("Lines = " + str(items["RootNode"]["Lines"]))
        print("Lines 0 ====> " + str(items["RootNode"]["Lines"][0]))
        print("Lines 1 ====> " + str(items["RootNode"]["Lines"][1]))
        print("Lines 2 ====> " + str(items["RootNode"]["Lines"][2]))
        print("Lines 0 GeneratedPower " + str(items["RootNode"]["Lines"][0]["GeneratedPower"]))
        print("Lines 1 GeneratedPower " + str(items["RootNode"]["Lines"][1]["GeneratedPower"]))
        print("Lines 2 GeneratedPower " + str(items["RootNode"]["Lines"][2]["GeneratedPower"]))

        print("Lines 1 ----->")

        print("Lines 1 GeneratedPower " + str(items["RootNode"]["Lines"][1]["GeneratedPower"]))
        print("Lines 1 ID " + str(items["RootNode"]["Lines"][1]["ID"]))
        print("Lines 1 ID 0 GeneratedPower" + str(items["RootNode"]["Lines"][1]["Childs"][0]["GeneratedPower"]))
        print("Lines 1 ID 0 ID" + str(items["RootNode"]["Lines"][1]["Childs"][0]["ID"]))


        #print("Lines 1 ID 0 ID внешн ист" + str(items["RootNode"]["Lines"][1]["Childs"][0]["Childs"][0]["ID"])) #у больницы 2 нет внешнего источника
        print("Lines 1 ID 0 ID внешн ист" + str(items["RootNode"]["Lines"][1]["Childs"][0]["Childs"])) #у больницы 2 нет внешнего источника
        if str(items["RootNode"]["Lines"][1]["Childs"][0]["Childs"])=="None":
                print("!!!!!!!!!!!!!!!!!!!!!!!!!")



        print("Lines 1 ID 1 GeneratedPower" + str(items["RootNode"]["Lines"][1]["Childs"][1]["GeneratedPower"]))
        print("Lines 1 ID 1 ID" + str(items["RootNode"]["Lines"][1]["Childs"][1]["ID"]))
        print("Lines 1 ID 2 GeneratedPower" + str(items["RootNode"]["Lines"][1]["Childs"][2]["GeneratedPower"]))
        print("Lines 1 ID 2 ID" + str(items["RootNode"]["Lines"][1]["Childs"][2]["ID"]))
        print("Lines 1 ID 3 GeneratedPower" + str(items["RootNode"]["Lines"][1]["Childs"][3]["GeneratedPower"]))
        print("Lines 1 ID 3 ID" + str(items["RootNode"]["Lines"][1]["Childs"][3]["ID"]))
        print("Lines 1 ID 3 ID внешн ист" + str(items["RootNode"]["Lines"][1]["Childs"][3]["Childs"][0]["ID"]))
        print("Lines 1 ID 3 ID выраб мощн внешн ист" + str(items["RootNode"]["Lines"][1]["Childs"][3]["Childs"][0]["GeneratedPower"]))

        
        print("Stations ------------------------------------------------")
        print("Stations = " + str(items["RootNode"]["Stations"]))
        print("Stations 0 = " + str(items["RootNode"]["Stations"][0]))
        print("Stations 1 = " + str(items["RootNode"]["Stations"][1]))
        print("Stations 2 = " + str(items["RootNode"]["Stations"][2]))
        print("Stations 3 = " + str(items["RootNode"]["Stations"][3]))
        print("Stations 4 = " + str(items["RootNode"]["Stations"][4]))
        print("Stations 5 = " + str(items["RootNode"]["Stations"][5]))
        print(str(items["RootNode"]["Stations"][0]["ID"])+" generates power: "+str(items["RootNode"]["Stations"][0]["GeneratedPower"])+"%")
        print(str(items["RootNode"]["Stations"][1]["ID"])+" generates power: "+str(items["RootNode"]["Stations"][1]["GeneratedPower"])+"%")
        print(str(items["RootNode"]["Stations"][5]["ID"])+" generates power: "+str(items["RootNode"]["Stations"][5]["GeneratedPower"])+"%")




        time.sleep(500) # 5 sec pause
