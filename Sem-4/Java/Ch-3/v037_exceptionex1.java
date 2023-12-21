// 034 ch-3(17)
// java program to show the use of try and catch to handle exception
public class v037_exceptionex1 {
    public static void main(String[] args) {
        int arr[] = { 23, 43, 45 };
        try {
            System.out.println("Trying to access 26th element.");
            System.out.println("arr[25] = " + arr[26]);
            // array index out of limits
        } catch (ArrayIndexOutOfBoundsException e) {
            System.out.println("Array index is out of bounds : ");
        }
    }
}
