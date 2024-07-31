# 58 Write a python code basic chat client
import socket

host = 'localhost'
port = 9000

# Create client-side socket
s = socket.socket(socket.AF_INET, socket.SOCK_STREAM)
s.connect((host, port))

try:
    # Enter data at client
    message = input("Enter message: ")

    # Continue as long as 'exit' is not entered by the user
    while message != 'exit':
        # Send data from client to server
        s.send(message.encode())

        # Receive data from server
        data = s.recv(1024)
        data = data.decode()
        print("From server: " + data)

        # Enter data again
        message = input("Enter message: ")

finally:
    # Close connection
    s.close()
