SELECT CM.NAME || ' HAS PLACED ORDER ' ||
SO.S_ORDER_NO || ' ON '|| SO.S_ORDER_DATE
FROM CLIENT_MASTER CM, SALES_ORDER SO
WHERE CM.CLIENT_NO=SO.CLIENT_NO;