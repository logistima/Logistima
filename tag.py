import asyncio
from bleak import BleakScanner
import uuid

#%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
def get_detector_uuid():

    # Generate a UUID for the machine
    detector_uuid = uuid.uuid1()


    return detector_uuid
#%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
#%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
def get_geo_data():

    print("No Geo Data ....! Try Again Later!")


    
#%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%

#%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
async def scan():
    devices = await BleakScanner.discover()
    for device in devices:
        print("Device:", device)
        print("UUID:", device.address)
        print("RSSI:", device.rssi)
        print()
#%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
#Step 1: Get the Detector UUID (MAC address)
detector_uuid = get_detector_uuid()
print("1.Detector UUID:", detector_uuid)
#%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
#%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
#Step 2: Get the Detector Geo Data
get_geo_data()

#%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
#%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
#Step 3: Scan BLE Tags
asyncio.run(scan())

#%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
#asyncio.run(scan())