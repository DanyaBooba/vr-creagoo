import cv2
#import json
import mediapipe as mp
import requests

mp_drawing = mp.solutions.drawing_utils
mp_hands = mp.solutions.hands

cap = cv2.VideoCapture(0)  # создаём объект для захвата видео с вебкамеры
with mp_hands.Hands(
        min_detection_confidence=0.5,
        min_tracking_confidence=0.5) as hands:
    while cap.isOpened():
        success, image = cap.read()  # получаем кадр с вебкамеры
        if not success:
            print("Ignoring empty camera frame.")
            continue

        # переворачиваем картинку и переводим кодировку цвета из BGR в RGB
        image = cv2.cvtColor(cv2.flip(image, 1), cv2.COLOR_BGR2RGB)

        # Этот флаг можно установить в False для улучшения производительности перед обработкой изображения
        image.flags.writeable = False
        
        # Обрабатываем изображение (ищем руки на картинке, отмечаем ключевые точки и определяем левая/правая)
        results = hands.process(image)
        # координаты ключевых точек лежат в именованном кортеже results.multi_hand_landmarks
        # информация о типе руки (левая правая) в results.multi_handedness
        
        image.flags.writeable = True
        image = cv2.cvtColor(image, cv2.COLOR_RGB2BGR)
              
        count_dots=0
        url=""
        mp="https://vr.creagoo.ru/server__3/put.php?"
        if results.multi_hand_landmarks:
            lpst = str(list(results.multi_hand_landmarks))
            for i in range(0,len(lpst)):
                 if lpst[i]=="x":
                    count_dots = count_dots+1
                    str_x=""
                    i=i+1
                    while lpst[i] != "y":
                        i=i+1
                        if lpst[i].isdigit() or lpst[i]==".":
                           str_x += lpst[i]
                    str_x1=float(str_x)
                    str_x2=str_x1*100
                    str_x3=str(str_x2)
                    if lpst[i]=="y":
                        str_y=""
                        i=i+1
                        while lpst[i] != "z":
                            i=i+1
                            if lpst[i].isdigit() or lpst[i]==".":
                                str_y += lpst[i]
                        str_y1=float(str_y)
                        str_y2=str_y1*100
                        str_y3=str(str_y2)
                        if lpst[i]=="z":
                            str_z=""
                            i=i+1
                            while lpst[i] != "}":
                                i=i+1
                                if lpst[i].isdigit() or lpst[i]==".":
                                    str_z += lpst[i]
                            str_z1=float(str_z)
                            str_z2=str_z1*100
                            str_z3=str(str_z2)
                            print("(x,y,z)=("+str_x+","+str_y+","+str_z+")")
                            if count_dots<21:
                                url = url + "x"+str(count_dots)+"="+str_y3+"&y"+str(count_dots)+"="+str_x3+"&z"+str(count_dots)+"="+str_z3+"&"
                            
            #print(mp+url)
            #print("-----------------------------------------")
            response = requests.get(mp+url)
        
            # Рисуем скелет руки
            for hand_landmarks in results.multi_hand_landmarks:
                mp_drawing.draw_landmarks(
                    image, hand_landmarks, mp_hands.HAND_CONNECTIONS)

        cv2.imshow('MediaPipe Hands', image)
        if cv2.waitKey(5) & 0xFF == 27:
            break
cap.release()
