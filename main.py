import sys
from selenium import webdriver
from selenium.webdriver.common.by import By
from selenium.webdriver.common.keys import Keys
import time, random

# Username and password of our instagram account
my_username = 'a'
my_password = 'm'

# Instagram username list for DM:
usernames = ['user1', 'user2', 'user3',]

# Messages:
messages = ['Hey! Please follow my page', 'Hey, how are you doing?', 'Hey']

# Delay time between messages in seconds:
between_messages = 500

browser = webdriver.Chrome()

# Authorization:
def auth(username):
    try:
        browser.get('https://cekdptonline.kpu.go.id')
        time.sleep(1)

        input_username = browser.find_element(By.ID, '__BVID__19')

        input_username.send_keys(username)
        # time.sleep(random.randrange(1, 2))
        input_username.send_keys(Keys.ENTER)
        time.sleep(1)
        text = browser.find_element(By.CLASS_NAME, 'column').text
        print(text)
    except Exception as err:
        print(err)
        browser.quit()
        
auth(sys.argv[1])

# print("Hello Wordl")