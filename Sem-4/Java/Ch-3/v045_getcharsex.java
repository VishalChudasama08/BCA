// ch-3(10)
// java program to show the character extraction methods...
public class v045_getcharsex {
    public static void main(String[] args) {
        String str = "computer";
        System.out.println("first charcter of computer : " + str.charAt(0));
        System.out.println("last character of computer : " + str.charAt(str.length() - 1));

        char[] dest = new char[3];
        str.getChars(3, 6, dest, 0); // copy characters to dest
        System.out.println(dest);

        byte[] bytes = new byte[3];
        bytes = "ABC".getBytes(); // copy ascii values of a,b,c to bytes
        System.out.println("bytes array : ");
        for (int i = 0; i < 3; i++) {
            System.out.print(bytes[i] + " ");
        }
        System.out.println();

        char[] chars = new char[3];
        chars = "ABC".toCharArray(); // copy characters to chars
        System.out.println("chars array : ");
        for (int i = 0; i < 3; i++) {
            System.out.print(chars[i] + " ");
        }
    }
}