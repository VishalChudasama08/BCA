//003
//prg for array intialization at the time of declaration
class onedimarray1 {
    public static void main(String[] args) {
        String days[] = { "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday" };
        for (int i = 0; i < 7; i++) {
            System.out.println("The Day [" + (i + 1) + "] is : " + days[i]);
        }
    }
}