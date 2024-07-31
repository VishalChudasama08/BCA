# 52 Write a python code for client received message from server

import socket

# take the server name and port number
host = 'localhost'
port = 5000

# create a client side socket that uses UDP protocol
s = socket.socket(socket.AF_INET, socket.SOCK_DGRAM)

try:
    # set a timeout for 5 seconds
    s.settimeout(5)
    # receive message string from server in 1024 bytes
    msg, server_addr = s.recvfrom(1024)
    while msg:
        print('Received:', msg.decode())
        msg, server_addr = s.recvfrom(1024)
except socket.timeout:
    print("Timeout exceeded. Closing connection.")
finally:
    # close the socket connection
    s.close()
