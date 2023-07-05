/* Single Table Retrieval */
/* 1. */ SELECT name FROM client_master
/
/* 2. */ SELECT * FROM client_master;
/
/* 3. */ SELECT name,city FROM client_master;
/
/* 4. */ SELECT product_no FROM product_master;
/
/* 5. */ SELECT name FROM client_master WHERE name LIKE ('_a%');
/
/* 6. */ SELECT name, city FROM client_master WHERE city LIKE ('_a%');
/
/* 7. */ SELECT city FROM client_master WHERE city IN('Bombay', 'Delhi', 'Madras');
/
/* 8. */ SELECT * FROM client_master WHERE city = 'Bombay';
/
/* 9. */ SELECT * FROM client_master WHERE bal_due > 10000;
/
/* 10. */ SELECT * FROM sales_order WHERE order_date LIKE ('%JAN%');
/
/* 11. */ SELECT * FROM client_master WHERE client_no = 'C00001' OR client_no= 'C00002';
/
/* 12. */ SELECT product_no,descr FROM product_master WHERE descr IN ('1.44 Drive', '1.22 Drive');
/
/* 13. */ SELECT product_no,sell_price FROM product_master WHERE sell_price > 2000 AND sell_price <= 5000;
/
/* 14. */ SELECT product_no,sell_price, sell_price * 15 FROM product_master WHERE sell_price > 1500;
/
/* 15. */ SELECT product_no,sell_price, sell_price * 15 "NEW PRICE" FROM product_master WHERE sell_price > 1500;
/
/* 16. */ SELECT product_no,cost_price FROM product_master WHERE cost_price < 1500;
/
/* 17. */ SELECT * FROM product_master ORDER BY descr;
/
/* 18. */ ELECT product_no, cost_price, cost_price * cost_price "sqare_of_cost_price" FROM product_master;
/
/* 19. */ SELECT product_no, descr, cost_price, cost_price/100 "cost_price/100" FROM product_master WHERE descr = '540 HDD';
/
/* 20. */ SELECT name, city, state FROM client_master WHERE state != 'Maharashtra';
/
/* 21. */ SELECT product_no, descr, sell_price FROM product_master WHERE descr LIKE ('M%');
/
/* 22. */ SELECT * FROM sales_order WHERE order_states = 'CANCELLED' AND (order_date LIKE ('%MAR%')); /* Month of March */
/