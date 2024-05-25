# number format 
n1 = 0O17
n2 = 0b1110010
n3 = 0X1C2

n = int(11)
print("octal to decimel 0o17:-", n)
n=int(n2)
print("Binary to decimal 0b110010:-", n)
n=int(n3)
print("Hexadecimal to decimal 0x1c2:-", n)

n4="3"
n=ord(n4)
print("Decimal", n4, " to Binary:-", n)
n=oct(30)
print("Decimal", n4, " to ocatl:-", n)
n=hex(30)
print("Decimal", n4, " to hexadecimal:- ", n)

n5=10
print("Binary", bin(n5))
print("Octal", oct(n5))
print("Hexadacimal", hex(n5))


str='100'
print("int('100') with base 2=", int(str, 2))
print("int('100') with base 4=", int(str, 4))
print("int('100') with base 8=", int(str, 8))
print("int('100') with base 10=", int(str, 16))
