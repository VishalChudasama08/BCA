# 53 Write a python code for Send Message to UDP client

import socket as so
import time

# Server configuration
host = 'localhost'
port = 5000

# Create a socket at server side to use UDP protocol
s = so.socket(so.AF_INET, so.SOCK_DGRAM)

# Let the server wait for 5 seconds
time.sleep(5)

# Send message to the client after encoding into binary string
s.sendto(b"Message for Client", (host, port))
s.sendto(b"Close", (host, port))

# Close the socket
s.close()
