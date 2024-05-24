import socket
import pyautogui
import keyboard
ip = "192.168.43.166"
port = 8000

sk=socket.socket(socket.AF_INET, socket.SOCK_STREAM)

sk.bind((ip,port))

sk.listen(10)


while True:
	addr, cl = sk.accept();

	print("connectado ", cl)

	nm="HTTP/1.1 200 ok \r\n\r\n"
	f =open('sy.html','r')

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
			
			if pr.find("@cima") == 0:
				try:
					
					pyautogui.press("top")
					print(pr)
				except Exception as e:
					print(0)
			elif pr.find("@baixo") == 0:
				try:
					pyautogui.press("bottom")
					
					print(pr)
				except Exception as e:
					print(1)

			elif pr.find("@dir") == 0:
				try:

					pyautogui.press("right")
					print(pr)
				except Exception as e:
					print(9)
				

			elif pr.find("@esq") == 0:
				try:
					pyautogui.press("left")
					print(pr)
				except Exception as e:
					print(8)
				
			
			else:
				print("error")
		
	addr.close()


sk.close()