/* Single Table Retrieval :- */
/* 1. */ SELECT name FROM client_master
/* 2. */ SELECT * FROM client_master;
/* 3. */ SELECT name,city FROM client_master;
/* 4. */ SELECT product_no FROM product_master;
/* 5. */ SELECT name FROM client_master WHERE name LIKE ('_a%');
/* 6. */ SELECT name, city FROM client_master WHERE city LIKE ('_a%');
/* 7. */ SELECT city FROM client_master WHERE city IN('Bombay', 'Delhi', 'Madras');
/* 8. */ SELECT * FROM client_master WHERE city = 'Bombay';
/* 9. */ SELECT * FROM client_master WHERE bal_due > 10000;
/* 10. */ SELECT * FROM sales_order WHERE order_date LIKE ('%JAN%');
/* 11. */ SELECT * FROM client_master WHERE client_no = 'C00001' OR client_no= 'C00002';
/* 12. */ SELECT product_no,descr FROM product_master WHERE descr IN ('1.44 Drive', '1.22 Drive');
/* 13. */ SELECT product_no,sell_price FROM product_master WHERE sell_price > 2000 AND sell_price <= 5000;
/* 14. */ SELECT product_no,sell_price, sell_price * 15 FROM product_master WHERE sell_price > 1500;
/* 15. */ SELECT product_no,sell_price, sell_price * 15 "NEW PRICE" FROM product_master WHERE sell_price > 1500;
/* 16. */ SELECT product_no,cost_price FROM product_master WHERE cost_price < 1500;
/* 17. */ SELECT * FROM product_master ORDER BY descr;
/* 18. */ SELECT product_no, cost_price, cost_price * cost_price "sqare_of_cost_price" FROM product_master;
/* 19. */ SELECT product_no, descr, cost_price, cost_price/(sell_price-100)FROM product_master WHERE descr = '540 HDD';
/* 20. */ SELECT name, city, state FROM client_master WHERE state != 'Maharashtra';
/* 21. */ SELECT product_no, descr, sell_price FROM product_master WHERE descr LIKE ('M%');
/* 22. */ SELECT * FROM sales_order WHERE order_states = 'CANCELLED' AND (order_date LIKE ('%MAR%')); /* Month of March */

/* Set Function And Concatenation :- */
/* 23. */ SELECT count(order_no) FROM sales_order_details;
/* 24. */ SELECT avg(product_rate) FROM sales_order_details;
/* 25. */ SELECT min(product_rate) FROM sales_order_details;
/* 26. */ SELECT min(product_rate) "min_price", max(product_rate) "max_price" FROM sales_order_details;
/* 27. */ SELECT count(product_rate) FROM sales_order_details WHERE product_rate >= 1500;
/* 28. */ SELECT product_no,qty_on_hand,reorder_lvl FROM product_master WHERE qty_on_hand<reorder_lvl;
/* 29. */ SELECT a.client_no,a.name,c.order_no,c.order_date FROM client_master a, sales_order c WHERE a.client_no = c.client_no;

/* Having and Group By */
/* 30 */ SELECT A.descr, SUM(B.qty_ordered) FROM product_master A, sales_order_details B WHERE A.product_no = B.product_no GROUP BY A.descr;
/* 31 */ SELECT pm.descr, sum(sod.qty_ordered*sod.product_rate) "total price" FROM product_master pm, sales_order_details sod WHERE pm.product_no=sod.product_no GROUP BY pm.descr;
/* 32 */ SELECT order_no, SUM(qty_ordered * product_rate) FROM sales_order_details GROUP BY order_no HAVING MAX(product_rate * qty_ordered) >= 15000;
/* 33 */ 