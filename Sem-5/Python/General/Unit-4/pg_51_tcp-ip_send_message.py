# 51 Write a python code for Send Message to client

import socket

# server name and port number
host = 'localhost'
port = 5000

# Create a TCP/IP socket
s = socket.socket(socket.AF_INET, socket.SOCK_STREAM)

# Bind the socket to the address and port
s.bind((host, port))

# allow maximum socket connect to socket 
s.listen(1)

# allow till a client accept connection
c, address = s.accept()

# Display client address
print("Connection from :- ", str(address))

#send message to client 
c.send(b"Hello client")
msg = "bye"
c.send(msg.encode())

# disconnect the server
c.close()
