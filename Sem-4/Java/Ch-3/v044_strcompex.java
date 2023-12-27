// ch-3(9)
// string comparison methods....
public class v044_strcompex {
    public static void main(String[] args) {
        String str1 = "Hello Friends";
        String str2 = "hello friends";
        String str3 = "abcdef";
        System.out.println(str1 + " equals " + str2 + " : " + str1.equals(str2));
        System.out.println(str1 + " equals " + str2 + " ignoring case : ");
        System.out.println(str1.equalsIgnoreCase(str2));
        System.out.println(str1 + " starts with hello : " + str1.startsWith("Hello"));
        System.out.println(str2 + " ends with Friends : " + str1.endsWith("Friends"));
        System.out.println(str3 + " contains cde : " + str3.regionMatches(2, "cde", 0, 3));
        System.out.println(str3 + " contains CDE : " + str3.regionMatches(2, "CDE", 0, 3));
        System.out.println(str3 + " constains CDE ignoring case : ");
        System.out.println(str3.regionMatches(true, 2, "CDE", 0, 3));
    }
}