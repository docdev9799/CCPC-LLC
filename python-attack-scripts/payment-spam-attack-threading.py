import requests
import threading

url = 'https://chocolatecoveredpaperclips.com/phpfake2/includes/verify.inc.php'

data = {
'firstname': 'Joanne',
'lastname': 'Rowling',
'email': 'jkr@gmail.com',
'phone': '4124567891',
'street': '109 High Street',
'city': 'Pittsburgh',
'state': 'Pennsylvania',
'ccn': '4417 1234 5678 9113',
'expmonth': 'December',
'expyear': '2029',
'cvv': '444'
}

def do_request():
  while True:
    response = requests.post(url, data=data)
    parseurl = response.url.split("=")
    if (parseurl[1].isdecimal()):
      output = 'Sent Request Successfully - REFID: ' + parseurl[1]
    else:
      output = 'Error: ' + parseurl[1]
    print(output)

threads = []

for i in range(50):
  t = threading.Thread(target=do_request)
  t.daemon = True
  threads.append(t)

for i in range(50):
  threads[i].start()

for i in range(50):
  threads[i].join()




