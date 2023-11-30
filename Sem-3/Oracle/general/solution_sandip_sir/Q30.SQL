SELECT PM.descr,SUM(SOD.qty_ordered) 
FROM product_master PM, sales_order_details SOD
WHERE PM.PRODUCT_NO=SOD.PRODUCT_NO
GROUP BY PM.descr;


description   qty
1.44 drive	1
1.44 drive	5