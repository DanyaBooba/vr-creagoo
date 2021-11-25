d = [
{
  "name": "John",
  "age": 30,
  "married": True,
  "children": ["Ann","Lee"],
  "cars":  {"model": "Лада Калина", "mpg": 37.5},
},
{
  "name": "Lee",
  "age": 23,
  "married": False,
  "children": None,
  "cars": [
    {"model": "BMW 230", "mpg": 27.5},
    {"model": "Ford Edge", "mpg": 24.1},
  ]
},
]
 
 
def flattenjson(d):
    out = []
    def flat(obj,keys='[',delim=']['):
        if type(obj) is dict:
            for k in obj:
                flat(obj[k], keys + repr(k) + delim)
        elif type(obj) is list:
            for i,x in enumerate(obj):
                flat(x, keys + repr(i) + delim)
        else:
            out.append([keys[:-1],obj])
    flat(d)
    return out
k = flattenjson(d)
for i in k: print(*i)