package com.example.controller;

import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.servlet.ModelAndView;

@Controller
public class HelloController {

   @RequestMapping("/hello")
   public ModelAndView sayHello() {
      ModelAndView modelAndView = new ModelAndView("hello");
      modelAndView.addObject("message", "Hello, World!");
      return modelAndView;
   }
}
