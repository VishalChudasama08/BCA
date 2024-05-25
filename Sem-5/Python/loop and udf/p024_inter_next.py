# Iter Example-1
string = "0123456789"
my_iter = iter(string)
print(my_iter)
print(next(my_iter))
for ch in iter(my_iter):
 print(ch)
