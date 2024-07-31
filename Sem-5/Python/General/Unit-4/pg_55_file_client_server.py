# 55 Write a python for create File Client server

import socket

# Client configuration
server_host = 'localhost'
server_port = 5000
file_path = 'file_to_send.txt'

# Create a TCP socket
client_socket = socket.socket(socket.AF_INET, socket.SOCK_STREAM)

# Connect to the server
client_socket.connect((server_host, server_port))

# Open the file to send
with open(file_path, 'rb') as f:
    # Read and send the file in chunks
    while True:
        data = f.read(1024)
        if not data:
            break
        client_socket.sendall(data)

print("File sent successfully.")

# Close the socket
client_socket.close()
