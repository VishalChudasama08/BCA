#32 Write a python program to Hybrid Inheritance
class student(): # Main -1 
    rollno=0 
    def getrollno(self,a): 
        self.rollno=a 
    def putrollno(self): 
        return self.rollno 
 
class test(student): # sub of main -1 
    sub1=0 
    sub2=0 
    sub3=0 
    def getsub(self,a,b,c): 
        self.sub1=a 
        self.sub2=b 
        self.sub3=c 
    def putsub(self): 
        return self.sub1, self.sub2, self.sub3 
 
class sport(): # main -2 
    score=0 
    def getscore(self,a): 
        self.score=a 
    def putscore(self): 
        return self.score 
 
class result(test,sport): 
    total=0 
    def Display(self): 
        self.total = self.sub1+self.sub2+ self.sub3 
        print("Roll Number :",student.putrollno(self)) 
        print("Marks :",test.putsub(self)) 
        print("Score : ",sport.putscore(self)) 
 
x = result() 
x.getrollno(101) 
x.getsub(45,45,45) 
x.getscore(1) 
x.Display()