import socket
import pyautogui
import keyboard
ip = "192.168.43.166"
port = 8008


sk=socket.socket(socket.AF_INET, socket.SOCK_STREAM)


sk.bind((ip,port))
print("ola vado como estas?")
sk.listen(10)


while True:
	addr, cl = sk.accept();

	print("connectado ", cl)

	nm="HTTP/1.1 200 ok \r\n\r\n"
	f =open('index.php','r')

	tag =f.read()
	sum = nm+tag
	addr.send(sum.encode('utf-8'))
	rcv = addr.recv(4024)
	if not rcv:
		print("vazio")
	else:
		dds=rcv.decode().split(" ")
		print(dds)
		if dds[1].__len__() >=1 :
			pr=dds[1][1:];
			
			if pr.find("*") == 0 and pr.find("ccc")== -1:
				print(1)
				print(dds[1][2:])
				pyautogui.press(dds[1][2:])
			

			elif pr.find("@cima") == 0:
				try:
					pos = pyautogui.position()
					x=pos.x
					y=pos.y - 40
					pyautogui.moveTo(x,y)
					print(pr)
				except Exception as e:
					print(0)
			elif pr.find("@baixo") == 0:
				try:
					pos = pyautogui.position()
					x=pos.x
					y=pos.y + 40

					pyautogui.moveTo(x,y)
					print(pr)
				except Exception as e:
					print(1)

			elif pr.find("@dir") == 0:
				try:
					pos = pyautogui.position()
					x=pos.x + 40
					y=pos.y 
					pyautogui.moveTo(x,y)
					print(pr)
				except Exception as e:
					print(9)
				

			elif pr.find("@esq") == 0:
				try:
					pos = pyautogui.position()
					x=pos.x - 40
					y=pos.y 
					pyautogui.moveTo(x,y)
					print(pr)
				except Exception as e:
					print(8)
				
			elif pr.find("@cl") == 0:
				pos = pyautogui.position()
				x=pos.x
				y=pos.y 
				pyautogui.click(x,y)
				print(pr)
			elif pr.find("@rg") == 0:
				pos = pyautogui.position()
				x=pos.x
				y=pos.y 
				pyautogui.rightClick(x,y)
				print(pr)
			elif pr.find("")== 0:
				ddr=pr.split("ccc")
				if ddr.__len__() >= 2:
					ddr=dds[1][2:].replace("ccc","+")
					ddr2=ddr.replace("top","up")
					print(ddr2)

					keyboard.press(ddr2)

			else:
				print(dds[1][2:])
		
	addr.close()


sk.close()