# shellcheck disable=SC2148
echo "Enter 1st Value";
read a;
echo "Enter 2nd value";
read b;
c=$((a + b));
echo "addition is $c";
# Method-1
# open .sh file on vs code
# open new terminal 
# in terminal find near by +(big plus) icon down-erow click it (Launch Profile...) and choice "Git Bash"
# than click on "Terminal" (vs code top-bar, there line) and click on "Run Active File"
# (in terminal --> )
# visha@LAPTOP-HRB2BB7Q MINGW64 /d/Happy_Coding/With_Github/BCA (main)
# $ 'd:/Happy_Coding/With_Github/BCA/Sem-4/UNIX_shell_programing/001_arithmetic_addition.sh'
# Enter 1st Value
# 10
# Enter 2nd value
# 20
# addition is 30

# Method-2
# open .sh file on vs code
# open new terminal 
# in terminal find near by +(big plus) icon down-erow click it (Launch Profile...) and choice "Git Bash"
# (in terminal --> write "bash" than space than file path {on path use this slase -> / not use use this slase -> \ })
# visha@LAPTOP-HRB2BB7Q MINGW64 /d/Happy_Coding/With_Github/BCA (main)
# $ bash Sem-4/UNIX_shell_programing/001_arithmetic_addition.sh
# Enter 1st Value
# 10
# Enter 2nd value
# 20
# addition is 30

# Method-3
# open .sh file on any editor and copy all code text 
# open git bash.exe aplication ("C:\Program Files\Git\bin\bash.exe") than
# paste code text in new opened bash.exe terminal and click on Enter (Your code is runing...)