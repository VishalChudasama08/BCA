import sys
print('Number of arguments:', len(sys.argv), 'Argument')
print('Argument list:', len(sys.argv))

a=sys.argv[0]
x=int(sys.argv[1])
y=int(sys.argv[2])

print("1st Argv=", a, " 2nd Arg=", x, " 3rd Arg=", y)
print('Command line Program')
length = len(sys.argv)
for i in range[1, length] :
    print(sys.argv[i])