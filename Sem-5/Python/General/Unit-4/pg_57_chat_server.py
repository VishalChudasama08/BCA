# 57 Write a python code basic chat server
import socket
host='localhost'
port = 9000

# create server side socket
s = socket.socket()
s.bind((host,port))

# let maximum connect are 14 only
s.listen(1)

# wait till a client connects
c , addr = s.accept()
print("A client Connected")
while True:
    # receive data from client
    data = c.recv(1024)
    # if client sends empty string, come out
    if not data:
        break
    print("From client: " + str(data.decode()))
    # enter response data from server
    data1 = input("Enter response")
    # send that data to client
    c.send(data1.decode())

# close connection
c.close()