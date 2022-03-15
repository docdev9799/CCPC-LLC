import requests
import random

url = 'https://chocolatecoveredpaperclips.com/phpfake1/includes/login.inc.php'

special = ['!', '@', '#', '$', '%', "^", "&", '*', '(', ')']
email = ['@gmail.com', '@hotmail.com', '@live.com', '@yahoo.com', '@outlook.com']

counter = 0;

def createRandUser():
  f = open('dictionary.txt', 'r')
  content = f.read()
  content_list = content.splitlines()
  f.close()
  if (random.randint(0, 1) == 1):
    output = content_list[random.randint(0, 25486)] + str(random.randint(0, 4000)) + email[random.randint(0, 4)]
  elif (random.randint(0, 1) == 1):
    output = content_list[random.randint(0, 25486)] + str(random.randint(0, 4000))
  else:
    output = content_list[random.randint(0, 25486)]
  return output

def createRandPass():
  f = open('dictionary.txt', 'r')
  content = f.read()
  content_list = content.splitlines()
  f.close()
  output = content_list[random.randint(0, 25486)] + str(random.randint(0, 4000)) + special[random.randint(0, 9)]
  return output

while True:

  uid = createRandUser()
  pwd = createRandPass()

  response = requests.post(url, data={
  'uid': createRandUser(),
  'pwd': createRandPass()
  })

  print('Attempting to log in with user=[' + uid + '] and pwd=[' + pwd + ']...')

  if ('phplogin' in response.url):
    counter += 1
    output = 'Login successful: ' + str(counter)
  else:
    parseurl = response.url.split("=")
    output = 'Error: ' + parseurl[1]

  print(output)
