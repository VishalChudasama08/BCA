//004
//2 dimensional array prg...
class twodimarray {
    public static void main(String[] args) {
        int marks[][] = { { 60, 61, 62 }, { 56, 57, 58 }, { 70, 71, 72 }, { 66, 67, 68 } };
        for (int i = 0; i < 4; i++) {
            System.out.print("Marks of student " + (i + 1));
            for (int j = 0; j < 3; j++) {
                System.out.print("  =>  " + marks[i][j] + "  ");
            }
            System.out.println();
        }
    }
}