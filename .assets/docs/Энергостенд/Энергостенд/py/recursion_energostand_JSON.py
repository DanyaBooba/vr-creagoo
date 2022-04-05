from itertools import chain
import re

def sequence(*funcs):
    if len(funcs) == 0:
        def result(src):
            yield (), src
        return result
    def result(src):
        for arg1, src in funcs[0](src):
            for others, src in sequence(*funcs[1:])(src):
                yield (arg1,) + others, src
    return result

number_regex = re.compile(r"(-?(?:0|[1-9]\d*)(?:\.\d+)?(?:[eE][+-]?\d+)?)\s*(.*)", re.DOTALL)

def parse_number(src):
    match = number_regex.match(src)
    if match is not None:
        number, src = match.groups()
        yield eval(number), src

string_regex = re.compile(r"('(?:[^\\']|\\['\\/bfnrt]|\\u[0-9a-fA-F]{4})*?')\s*(.*)", re.DOTALL)

def parse_string(src):
    match = string_regex.match(src)
    if match is not None:
        string, src = match.groups()
        yield eval(string), src

def parse_word(word, value=None):
    l = len(word)
    def result(src):
        if src.startswith(word):
            yield value, src[l:].lstrip()
    result.__name__ = "parse_%s" % word
    return result

parse_true = parse_word("true", True)
parse_false = parse_word("false", False)
parse_null = parse_word("null", None)

def parse_value(src):
    for match in chain(
        parse_string(src),
        parse_number(src),
        parse_array(src),
        parse_object(src),
        parse_true(src),
        parse_false(src),
        parse_null(src),
    ):
        yield match
        return

parse_left_square_bracket = parse_word("[")
parse_right_square_bracket = parse_word("]")
parse_empty_array = sequence(parse_left_square_bracket, parse_right_square_bracket)

def parse_array(src):
    for _, src in parse_empty_array(src):
        yield [], src
        return

    for (_, items, _), src in sequence(
        parse_left_square_bracket,
        parse_comma_separated_values,
        parse_right_square_bracket,
    )(src):
        yield items, src

parse_comma = parse_word(",")

def parse_comma_separated_values(src):
    for (value, _, values), src in sequence(
        parse_value,
        parse_comma,
        parse_comma_separated_values
    )(src):
        yield [value] + values, src
        return

    for value, src in parse_value(src):
        yield [value], src

parse_left_curly_bracket = parse_word("{")
parse_right_curly_bracket = parse_word("}")
parse_empty_object = sequence(parse_left_curly_bracket, parse_right_curly_bracket)

def parse_object(src):
    for _, src in parse_empty_object(src):
        yield {}, src
        return
    for (_, items, _), src in sequence(
        parse_left_curly_bracket,
        parse_comma_separated_keyvalues,
        parse_right_curly_bracket,
    )(src):
        yield items, src

parse_colon = parse_word(":")

def parse_keyvalue(src):
    for (key, _, value), src in sequence(
        parse_string,
        parse_colon,
        parse_value
    )(src):
        yield {key: value}, src

def parse_comma_separated_keyvalues(src):
    for (keyvalue, _, keyvalues), src in sequence(
        parse_keyvalue,
        parse_comma,
        parse_comma_separated_keyvalues,
    )(src):
        keyvalue.update(keyvalues)
        yield keyvalue, src
        return

    for keyvalue, src in parse_keyvalue(src):
        yield keyvalue, src

def parse(s):
    s = s.strip()
    match = list(parse_value(s))
    if len(match) != 1:
        raise ValueError("not a valid JSON string")
    result, src = match[0]
    if src.strip():
        raise ValueError("not a valid JSON string")
    return result



#d =[{"name": "John","age": 30,"married": True,  "children": ["Ann","Lee"],"cars":  {"model": "Лада Калина", "mpg": 37.5},},{"name": "Lee","age": 23,"married": False,"children": None,"cars": [{"model": "BMW 230", "mpg": 27.5},{"model": "Ford Edge", "mpg": 24.1}, ]},] 
#d =[{"name": "John","age": 30,"married": True,  "children": ["Ann","Lee"]}]
#d=[{ "ElementsOK": True, "Lamp1val": 57, "Lamp2val": 3}]
#d =[{"name": "John","age": 30,"married": True}]
#d =[{"ElementsOK": True,"age": 30,"married": True}]
d=[
{
 "ElementsOK":True, 
 "Lamp1val":57,
 "Lamp2val":3,
 "RootNode":{
             "GeneratedPower":211.51098901098902,
             "Lines":[
                      {
                       "Childs":[
                                 {
                                  "Childs":[
                                            {
                                             "Childs":[
                                                       {
                                                        "Childs": Null,
                                                        "GeneratedPower":0,
                                                        "ID":"Завод №1",
                                                        "IsON":false,
                                                        "ObjectType":0,
                                                        "Power":100,
                                                        "RequiredPower":100,
                                                        "SocketNum":-1
                                                       }
                                                      ],
                                             "GeneratedPower":0,
                                             "ID":"МП2.1",
                                             "IsON":false,
                                             "ObjectType":1,
                                             "Power":0,
                                             "RequiredPower":0,
                                             "SocketNum":-1
                                            },
                                            {
                                             "Childs":[
                                                       {
                                                        "Childs":[
                                                                  {
                                                                   "Childs": Null,
                                                                   "GeneratedPower":100,
                                                                   "ID":"ДГ1",
                                                                   "IsON":True,
                                                                   "ObjectType":2,
                                                                   "Power":100,
                                                                   "RequiredPower":0,
                                                                   "SocketNum":-1
                                                                  }
                                                                 ],
                                                        "GeneratedPower":0,
                                                        "ID":"Микро район №1",
                                                        "IsON":false,
                                                        "ObjectType":0,
                                                        "Power":100,
                                                        "RequiredPower":23,
                                                        "SocketNum":-1
                                                       },
                                                       {
                                                        "Childs":[
                                                                  {
                                                                   "Childs": Null,
                                                                   "GeneratedPower":62,
                                                                   "ID":"АИ1",
                                                                   "IsON":True,
                                                                   "ObjectType":2,
                                                                   "Power":100,
                                                                   "RequiredPower":0,
                                                                   "SocketNum":-1
                                                                  }
                                                                 ],
                                                        "GeneratedPower":0,
                                                        "ID":"Микро район №2",
                                                        "IsON":false,
                                                        "ObjectType":0,
                                                        "Power":100,
                                                        "RequiredPower":67,
                                                        "SocketNum":-1
                                                       }
                                                      ],
                                             "GeneratedPower":0,
                                             "ID":"МП2.2",
                                             "IsON":false,
                                             "ObjectType":1,
                                             "Power":0,
                                             "RequiredPower":0,
                                             "SocketNum":-1
                                            }
                                           ],
                                  "GeneratedPower":0,
                                  "ID":"МП2",
                                  "IsON":True,
                                  "ObjectType":3,
                                  "Power":0,
                                  "RequiredPower":0,
                                  "SocketNum":-1
                                 }
                                ],
                       "GeneratedPower":70.503663003663007,
                       "ID":"П1",
                       "IsON":false,
                       "ObjectType":1,
                       "Power":0,
                       "RequiredPower":0,
                       "SocketNum":-1
                      },
                      {
                       "Childs":[
                                 {
                                  "Childs": Null,
                                  "GeneratedPower":0,
                                  "ID":"Больница №2",
                                  "IsON":false,
                                  "ObjectType":0,
                                  "Power":100,
                                  "RequiredPower":10,
                                  "SocketNum":-1
                                 },
                                 {
                                  "Childs": Null,
                                  "GeneratedPower":0,
                                  "ID":"Завод №1",
                                  "IsON":false,
                                  "ObjectType":0,
                                  "Power":100,
                                  "RequiredPower":100,
                                  "SocketNum":-1
                                 },
                                 {
                                  "Childs":[
                                            {
                                             "Childs": Null,
                                             "GeneratedPower":100,
                                             "ID":"ДГ3",
                                             "IsON":True,
                                             "ObjectType":2,
                                             "Power":100,
                                             "RequiredPower":0,
                                             "SocketNum":-1
                                            }
                                           ],
                                  "GeneratedPower":0,
                                  "ID":"Завод №2",
                                  "IsON":false,
                                  "ObjectType":0,
                                  "Power":100,
                                  "RequiredPower":61,
                                  "SocketNum":-1
                                 },
                                 {
                                  "Childs":[
                                            {
                                             "Childs": Null,
                                             "GeneratedPower":100,
                                             "ID":"АИ2",
                                             "IsON":True,
                                             "ObjectType":2,
                                             "Power":100,
                                             "RequiredPower":0,
                                             "SocketNum":-1
                                            }
                                           ],
                                  "GeneratedPower":0,
                                  "ID":"Микро район №3",
                                  "IsON":false,
                                  "ObjectType":0,
                                  "Power":100,
                                  "RequiredPower":80,
                                  "SocketNum":-1
                                 },
                                 {
                                  "Childs":[
                                            {
                                             "Childs": Null,
                                             "GeneratedPower":52,
                                             "ID":"АБ1",
                                             "IsON":True,
                                             "ObjectType":2,
                                             "Power":100,
                                             "RequiredPower":0,
                                             "SocketNum":-1
                                            }
                                           ],
                                  "GeneratedPower":0,
                                  "ID":"Микро район №4",
                                  "IsON":false,
                                  "ObjectType":0,
                                  "Power":100,
                                  "RequiredPower":26,
                                  "SocketNum":-1
                                 },
                                 {
                                  "Childs":[
                                            {
                                             "Childs": Null,
                                             "GeneratedPower":40,
                                             "ID":"АБ2",
                                             "IsON":True,
                                             "ObjectType":2,
                                             "Power":100,
                                             "RequiredPower":0,
                                             "SocketNum":-1
                                            }
                                           ],
                                  "GeneratedPower":0,
                                  "ID":"Микро район №5",
                                  "IsON":false,
                                  "ObjectType":0,
                                  "Power":100,
                                  "RequiredPower":57.999999999999993,
                                  "SocketNum":-1
                                 },
                                 {
                                  "Childs":[
                                            {
                                             "Childs": Null,
                                             "GeneratedPower":100,
                                             "ID":"АБ3",
                                             "IsON":True,
                                             "ObjectType":2,
                                             "Power":100,
                                             "RequiredPower":0,
                                             "SocketNum":-1
                                            }
                                           ],
                                  "GeneratedPower":0,
                                  "ID":"Микро район №6",
                                  "IsON":false,
                                  "ObjectType":0,
                                  "Power":100,
                                  "RequiredPower":67,
                                  "SocketNum":-1
                                 }
                                ],
                       "GeneratedPower":70.503663003663007,
                       "ID":"П2",
                       "IsON":false,
                       "ObjectType":1,
                       "Power":0,
                       "RequiredPower":0,
                       "SocketNum":-1
                      },
                      {
                       "Childs":[
                                 {
                                  "Childs":[
                                            {
                                             "Childs":[],
                                             "GeneratedPower":0,
                                             "ID":"МП1.1",
                                             "IsON":false,
                                             "ObjectType":1,
                                             "Power":0,
                                             "RequiredPower":0,
                                             "SocketNum":-1
                                            },
                                            {
                                             "Childs":[
                                                       {
                                                        "Childs":[
                                                                  {
                                                                   "Childs": Null,
                                                                   "GeneratedPower":100,
                                                                   "ID":"ДГ2",
                                                                   "IsON":True,
                                                                   "ObjectType":2,
                                                                   "Power":100,
                                                                   "RequiredPower":0,
                                                                   "SocketNum":-1
                                                                  }
                                                                 ],
                                                        "GeneratedPower":0,
                                                        "ID":"Больница №1",
                                                        "IsON":false,
                                                        "ObjectType":0,
                                                        "Power":100,
                                                        "RequiredPower":40,
                                                        "SocketNum":-1
                                                       },
                                                       {
                                                        "Childs":[
                                                                  {
                                                                   "Childs": Null,
                                                                   "GeneratedPower":100,
                                                                   "ID":"ДГ3",
                                                                   "IsON":True,
                                                                   "ObjectType":2,
                                                                   "Power":100,
                                                                   "RequiredPower":0,
                                                                   "SocketNum":-1
                                                                  }
                                                                 ],
                                                        "GeneratedPower":0,
                                                        "ID":"Завод №2",
                                                        "IsON":false,
                                                        "ObjectType":0,
                                                        "Power":100,
                                                        "RequiredPower":61,
                                                        "SocketNum":-1
                                                        }
                                                       ],
                                             "GeneratedPower":0,
                                             "ID":"МП1.2",
                                             "IsON":false,
                                             "ObjectType":1,
                                             "Power":0,
                                             "RequiredPower":0,
                                             "SocketNum":-1
                                            }
                                           ],
                                  "GeneratedPower":0,
                                  "ID":"МП1",
                                  "IsON":True,
                                  "ObjectType":3,
                                  "Power":0,
                                  "RequiredPower":0,
                                  "SocketNum":-1
                                 }
                                ],
                       "GeneratedPower":70.503663003663007,
                       "ID":"П3",
                       "IsON":false,
                       "ObjectType":1,
                       "Power":0,
                       "RequiredPower":0,
                       "SocketNum":-1
                      }
                     ],
              "RequiredPower":0,
              "Stations":[
                          {
                           "Childs": Null,
                           "GeneratedPower":64.722222222222229,
                           "ID":"ВГ1",
                           "IsON":True,
                           "ObjectType":2,
                           "Power":100,
                           "RequiredPower":0,
                           "SocketNum":-1
                          },
                          {
                           "Childs": Null,
                           "GeneratedPower":53.260073260073263,
                           "ID":"СБ1",
                           "IsON":True,
                           "ObjectType":2,
                           "Power":100,
                           "RequiredPower":0,
                           "SocketNum":-1
                          },
                           Null,
                           Null,
                           Null,
                          {
                           "Childs": Null,
                           "GeneratedPower":93.528693528693523,
                           "ID":"СБ2",
                           "IsON":True,
                           "ObjectType":2,
                           "Power":100,
                           "RequiredPower":0,
                           "SocketNum":-1
                          }
                         ]
            },
            "TreeOK":True,
            "Windval":40
}
]

my_json.parse(d)


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
