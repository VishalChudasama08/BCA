//020
//progarm of java which shows the use of multilevel inheritance
class Book {
    String name, author, publisher;

    Book(String name, String author, String publisher) {
        this.name = name;
        this.author = author;
        this.publisher = publisher;
    }

    void show() {
        System.out.println("Book Name : " + name);
        System.out.println("Book Auther Name : " + author);
        System.out.println("Book Publisher Name : " + publisher);
    }
}

class BookPages extends Book {
    int page;

    BookPages(String name, String author, String publisher, int page) {
        super(name, author, publisher);
        this.page = page;
    }

    void display() {
        super.show();
        System.out.println("Number of pages : " + page);
    }
}

class BookPrice extends BookPages {
    double price;

    BookPrice(String name, String author, String publisher, int page, double price) {
        super(name, author, publisher, page);
        this.price = price;
    }

    void display() {
        super.display();
        System.out.println("Price of book : " + price);
    }
}

public class v020mybook {
    public static void main(String[] args) {
        BookPrice b = new BookPrice("java", "mm", "E Eaiagrusamy", 300, 400);
        b.display();
    }
}
