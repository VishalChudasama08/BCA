# 52 Write a python code for client received message from server

import socket

# Server configuration
host = 'localhost'
port = 5000

# Create a socket using TCP/IP protocol
s = socket.socket(socket.AF_INET, socket.SOCK_STREAM)

# Connect to the server
s.connect((host, port))

try:
    while True:
        # Receive message from the server
        msg = s.recv(1024)
        # Check if the message is not empty
        if not msg:
            break  # Exit loop if no more data is received
        print("Received:", msg.decode())
except KeyboardInterrupt:
    print("Client interrupted.")
finally:
    # Disconnect the client
    s.close()