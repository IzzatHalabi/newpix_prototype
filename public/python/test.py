#!C:/Users/lenovo/AppData/Local/Programs/Python/Python39/python.exe -u

import json
import requests

response_1 = requests.get("http://newpix.test/api/api-get")
item = response_1.json()

new_val = float(item['item']['name']) + 0.01

response_2 = requests.post("http://newpix.test/api/api", data = {
    'name':  new_val
})


# print(item['item']['name'])
print(new_val)
# print("changed")
