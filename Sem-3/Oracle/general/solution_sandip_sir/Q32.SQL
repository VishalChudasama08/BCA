SELECT S_ORDER_NO,AVG(QTY_ORDERED),
SUM(QTY_ORDERED*PRODUCT_RATE) FROM
SALES_ORDER_DETAILS 
GROUP BY S_ORDER_NO
HAVING SUM(QTY_ORDERED*PRODUCT_RATE)<=15000;