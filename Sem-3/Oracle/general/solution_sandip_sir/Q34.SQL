SELECT PM.DESCRIPTION || ' WORTH RS. '||
SUM(SOD.QTY_ORDERED*SOD.PRODUCT_RATE) || ' was sold ' 
FROM PRODUCT_MASTER PM, SALES_ORDER_DETAILS SOD
WHERE PM.PRODUCT_NO=SOD.PRODUCT_NO
GROUP BY PM.DESCRIPTION;