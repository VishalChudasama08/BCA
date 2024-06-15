# write a python program  open a file TEST.TXT and read from the file and print how many vowels, constant, space and special symbol

vowels = "aeiouAEIOU"
consonants = "bcdfghjklmnpqrstvwxyzBCDFGHIJKLMNPQRSTVWXYZ"
number = "1234567890"

vowel_count = 0
consonant_count = 0
space_count = 0
special_symbol_count = 0
number_count = 0

file = open("D:/Happy_Coding/My_Code_In_Github/BCA/Sem-5/Python/General/Unit-1/test.txt", "r")
for char in file.read():
    if char in vowels:
        vowel_count += 1
    elif char in consonants:
        consonant_count += 1
    elif char.isspace():
        space_count += 1
    elif char in number:
        number_count += 1
    else:
        special_symbol_count += 1

file.close()

print("vowels: ", vowel_count)
print("constant: ", consonant_count)
print("space: ", space_count)
print("special symbol: ", special_symbol_count)
