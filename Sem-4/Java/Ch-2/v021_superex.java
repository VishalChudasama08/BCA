//021
//java parogram to show the use of super keyword which is used to call base class constructor 
class Student {
    int sub1, sub2, sub3, total;

    Student(int s1, int s2, int s3) {
        sub1 = s1;
        sub2 = s2;
        sub3 = s3;
    }

    void showResult() {
        total = sub1 + sub2 + sub3;
        System.out.println("Total is : " + total);
        System.out.println("Percentage is : " + total / 3.0);
    }
}

class StudentNo extends Student {
    int rollno;

    StudentNo(int s1, int s2, int s3, int rno) {
        super(s1, s2, s3); // calling super class constructor with s1,s2,s3
        rollno = rno;
    }

    void showRallNo() {
        System.out.println("Roll no is " + rollno);
    }
}

public class v021_superex {
    public static void main(String[] args) {
        StudentNo s = new StudentNo(60, 61, 62, 101);
        s.showResult();
        s.showRallNo();
    }
}
