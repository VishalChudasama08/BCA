package in.v8.main;

import org.springframework.context.ApplicationContext;
import org.springframework.context.annotation.AnnotationConfigApplicationContext;

import in.v8.main.services.NotesService;

public class KeepNotes {
    public static void main(String[] args) {
        ApplicationContext context = new AnnotationConfigApplicationContext(AppConfig.class); // Use AppConfig

        NotesService noteService = context.getBean(NotesService.class);
        // Now you can use noteService
    }
}