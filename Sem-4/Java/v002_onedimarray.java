//002
//simple one dimensional array
class v002_onedimarray {
    public static void main(String[] arg) {
        int marks[]; // declare array only
        marks = new int[3]; // declare array size
        marks[0] = 66;
        marks[1] = 65;
        marks[2] = 70;
        int total = marks[0] + marks[1] + marks[2];
        double per = total / 3;
        System.out.println("The total marks is : " + total);
        System.out.println("The percenterge is : " + per);
    }
}