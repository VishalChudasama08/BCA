//011
// program to sort an array in both ascending and descending order....
public class v011_sorting {
    public static void main(String[] args) {
        int i, j, a[] = { 11, 21, 31, 15, 10 }, temp;
        for (i = 0; i < 5; i++) {
            for (j = 0; j < 5; j++) {
                if (a[i] < a[j]) {
                    temp = a[i];
                    a[i] = a[j];
                    a[j] = temp;
                }
            }
        }
        System.out.println("after Sorting...");
        System.out.println("Ascending Decending");
        for (i = 0, j = 4; i < 5; i++, j--) {
            System.out.println(a[i] + "\t" + a[j]);
        }
    }
}
