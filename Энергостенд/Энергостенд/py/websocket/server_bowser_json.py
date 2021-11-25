# WS server that sends messages at random intervals

import asyncio
import datetime
import random
import websockets

async def time(websocket, path):
    while True:
        #now = datetime.datetime.utcnow().isoformat() + "dfgdfhhgZ"
        now = "[{\"a\":\"1\",\"b\":\"2\",\"date\":\""+datetime.datetime.utcnow().isoformat()+"\"},{\"a\":\"3\",\"b\":\"4\"}]"
        await websocket.send(now)
        await asyncio.sleep(random.random() * 3)

start_server = websockets.serve(time, "127.0.0.1", 5678)

asyncio.get_event_loop().run_until_complete(start_server)
asyncio.get_event_loop().run_forever()