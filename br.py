from time import sleep
import pyautogui


word = ['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','x','y','z']


for x in range(24):

	for y in range(24):
		for t in range(24):
			for n in range(24):
				sleep(0.1)
				nm=word[x]+word[y]+word[t]+word[n]
				print (nm);
				if nm=="acgr":

					nm="1111111"
					print (nm);
					pyautogui.hotkey("ctrl","c")
				
					
					
					