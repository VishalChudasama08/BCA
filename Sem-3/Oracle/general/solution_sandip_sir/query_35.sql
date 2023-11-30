select pm.description || ' worth Rs. '|| sum (sod.qty_disp*sod.product_rate)
|| ' was oedered in the month of '|| to_char(so.s_order_date, 'mon') from
product_master pm,sales_order_details sod,sales_order so
where sod.s_order_no=so.s_order_no and pm.product_no=sod.product_no
group by sod.product_no,pm.description,so.s_order_date
/
