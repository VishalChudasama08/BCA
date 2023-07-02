/*
set CONSTRAINT Column Level ==>
syntax => CREATE TABLE <table_name> (<firld_name> <data_type><(size)> CONSTRAINT <any-name> <constraint_name>, .... );
Examples =>
  column level PRIMARY KEY CONSTRAINT ex. ->
  CREATE TABLE client_master (client_no varchar(6) CONSTRAINT clientno_pri PRIMARY KEY, .... );
  
  column level CHECK CONSTRAINT ex. ->
  CREATE TABLE client_master (cost_price number(8,2) NOT NULL CHECK (cost_price>0), .... )
  
  
  
set CONSTRAINT Table Level ==>
syntax => CREATE TABLE <table_name> (<firld_name> <data_type><(size)>, .... , CONSTRAINT <any-name> <constraint_name><(firld1_name)>);
Examples =>
  Table level PRIMARY KEY CONSTRAINT ex. ->
  CREATE TABLE client_master (client_no varchar(6), .... ,CONSTRAINT clientno_pri PRIMARY KEY(<firld_name));

  Table level CHECK CONSTRAINT ex. ->
  CREATE TABLE client_master (client_no varchar(6), ... , CONSTRAINT clientid_check_like CHECK (client_no LIKE 'C%'))
*/
CREATE TABLE client_master
(client_no varchar(6) CONSTRAINT clientno_pri PRIMARY KEY,
name varchar(30) NOT NULL,
add1 varchar(30),
add2 varchar(30),
city varchar(15),
pincode number(8),
state varchar(15),
bal_due number(10,2),
CONSTRAINT clientid_check_like CHECK (client_no LIKE 'C%'))
/
INSERT INTO client_master (client_no, name, city, pincode, state, bal_due) VALUES ('C00001', 'Ivan Bayross', 'Bombay', 400054, 'Maharashtra', 15000)
/
INSERT INTO client_master (client_no, name, city, pincode, state, bal_due) VALUES ('C00002', 'Vandana Saitwal', 'Madras', 780001, 'Tamil Nadu', 0) 
/
INSERT INTO client_master (client_no, name, city, pincode, state, bal_due) VALUES ('C00003', 'Pramada Jahuste', 'Bombay', 400057, 'Maharashtra', 5000)
/
INSERT INTO client_master (client_no, name, city, pincode, state, bal_due) VALUES ('C00004', 'Basu Navindgi', 'Bombay', 400056, 'Maharashtra', 0) 
/
INSERT INTO client_master (client_no, name, city, pincode, state, bal_due) VALUES ('C00005', 'Ravi Sreedharan', 'Delhi', 100001, '', 2000) 
/
INSERT INTO client_master (client_no, name, city, pincode, state, bal_due) VALUES ('C00006', 'Rukmini', 'Bombay', 400050, 'Maharashtra', 0) 
/


CREATE TABLE product_master
(product_no varchar(6) CONSTRAINT product_pri PRIMARY KEY,
descr varchar(15) NOT NULL,
profit_percent number(4,2) NOT NULL,
unit_measure varchar(10) NOT NULL,
qty_on_hand number(8) NOT NULL,
reorder_lvl number(8,2) NOT NULL,
sell_price number(8,2) NOT NULL CHECK (sell_price>0),
cost_price number(8,2) NOT NULL CHECK (cost_price>0),
CONSTRAINT pro_id_like CHECK (product_no LIKE 'P%'))
/
INSERT INTO product_master (product_no, descr, profit_percent, unit_measure, qty_on_hand, reorder_lvl, sell_price, cost_price) VALUES ('P00001', '1.44 Floppies', 5, Piece, 100, 20, 525, 500)
/
INSERT INTO product_master (product_no, descr, profit_percent, unit_measure, qty_on_hand, reorder_lvl, sell_price, cost_price) VALUES ('P03453', 'Monitors', 6, Piece, 10, 3, 12000, 11280)
/
INSERT INTO product_master (product_no, descr, profit_percent, unit_measure, qty_on_hand, reorder_lvl, sell_price, cost_price) VALUES ('P06734', 'Mouse', 5, Piece, 20, 5, 1050, 1000)
/
INSERT INTO product_master (product_no, descr, profit_percent, unit_measure, qty_on_hand, reorder_lvl, sell_price, cost_price) VALUES ('P07865', '1.22 Floppies', 5, Piece, 100, 20, 525, 500)
/
INSERT INTO product_master (product_no, descr, profit_percent, unit_measure, qty_on_hand, reorder_lvl, sell_price, cost_price) VALUES ('P07868', 'Keyboards', 2, Piece, 10, 3, 3150, 3050)
/
INSERT INTO product_master (product_no, descr, profit_percent, unit_measure, qty_on_hand, reorder_lvl, sell_price, cost_price) VALUES ('P07885', 'CD Drive', 2.5, Piece, 10, 3, 5250, 5100)
/
INSERT INTO product_master (product_no, descr, profit_percent, unit_measure, qty_on_hand, reorder_lvl, sell_price, cost_price) VALUES ('P07965', '540 HDD', 4, Piece, 10, 3, 8400, 8000)
/
INSERT INTO product_master (product_no, descr, profit_percent, unit_measure, qty_on_hand, reorder_lvl, sell_price, cost_price) VALUES ('P07975', '1.44 Drive', 5, Piece, 10, 3, 1050, 1000)
/
INSERT INTO product_master (product_no, descr, profit_percent, unit_measure, qty_on_hand, reorder_lvl, sell_price, cost_price) VALUES ('P08865', '1.22 Drive', 5, Piece, 2, 3, 1050, 1000)
/


CREATE TABLE salesman_master
(salesman_no varchar(6) CONSTRAINT sales_no_pri PRIMARY KEY,
salesman_name varchar(30) NOT NULL,
address1 varchar(30) NOT NULL,
address2 varchar(30),
city varchar(15),
pincode number(8),
state varchar(20),
sal_amt number(8,2) NOT NULL CHECK (sal_amt>0),
tgt_to_get number(6,2) NOT NULL CHECK (tgt_to_get>0),
ytd_sales number(6,2) NOT NULL,
remarks varchar(30),
CONSTRAINT sales_no_like CHECK (salesman_no LIKE 'S%'))
/
INSERT INTO salesman_master (salesman_no, salesman_name, address1, address2, city, pincode, state, sal_amt, tgt_to_get, ytd_sales, remarks) VALUES ('S00001', 'Kiran', 'A/14', 'Worli', 'Bombay', 400002, 'MAH', 3000, 100, 50, 'Good')
/
INSERT INTO salesman_master (salesman_no, salesman_name, address1, address2, city, pincode, state, sal_amt, tgt_to_get, ytd_sales, remarks) VALUES ('S00002', 'Manjsh', '65', 'Nariman', 'Bombay', 400001, 'MAH', 3000, 200, 100, 'Good')
/
INSERT INTO salesman_master (salesman_no, salesman_name, address1, address2, city, pincode, state, sal_amt, tgt_to_get, ytd_sales, remarks) VALUES ('S00003', 'Ravi', 'P-7', 'Bandra', 'Bombay', 400032, 'MAH', 3000, 200, 100, 'Good')
/
INSERT INTO salesman_master (salesman_no, salesman_name, address1, address2, city, pincode, state, sal_amt, tgt_to_get, ytd_sales, remarks) VALUES ('S00004', 'Ashish', 'A/5', 'Juhu', 'Bombay', 400044, 'MAH', 3000, 200, 100, 'Good')
/


CREATE TABLE sales_order
(order_no varchar(6) CONSTRAINT sales_pri PRIMARY KEY,
order_date date NOT NULL,
client_no varchar(6) CONSTRAINT sales_ref_client REFERENCES client_master (client_no) ON DELETE CASCADE,
dely_addr varchar(25),
salesman_no varchar(6) CONSTRAINT sales_ref_sels REFERENCES salesman_master(salesman_no) ON DELETE CASCADE,
dely_type char(1) DEFAULT 'F' check(dely_type in('P','F')),
billed_yn char(1),
dely_date date,
order_states varchar(10) CONSTRAINT sales_state_ch check (order_states in('IN PROCESS','FULFILLED','BACKORDER','CANCELLED')),
CONSTRAINT so_date check(order_date<dely_date))
/
INSERT INTO sales_order (order_no, order_date, client_no, dely_type, billed_yn, salesman_no, dely_date, order_states) VALUES ('O19001', '12-jan-96', 'C00001', 'F', 'N', 'S00001', '20-jan-96', 'IP')
/
INSERT INTO sales_order (order_no, order_date, client_no, dely_type, billed_yn, salesman_no, dely_date, order_states) VALUES ('O19002', '25-jan-96', 'C00002', 'P', 'N', 'S00002', '27-jan-96', 'C')
/
INSERT INTO sales_order (order_no, order_date, client_no, dely_type, billed_yn, salesman_no, dely_date, order_states) VALUES ('O46865', '18-feb-96', 'C00003', 'F', 'Y', 'S00003', '20-feb-96', 'F')
/
INSERT INTO sales_order (order_no, order_date, client_no, dely_type, billed_yn, salesman_no, dely_date, order_states) VALUES ('O19003', '03-apr-96', 'C00001', 'F', 'Y', 'S00001', '07-apr-96', 'F')
/
INSERT INTO sales_order (order_no, order_date, client_no, dely_type, billed_yn, salesman_no, dely_date, order_states) VALUES ('O46866', '20-may-96', 'C00004', 'P', 'N', 'S00002', '22-may-96', 'C')
/
INSERT INTO sales_order (order_no, order_date, client_no, dely_type, billed_yn, salesman_no, dely_date, order_states) VALUES ('O10008', '24-may-96', 'C00005', 'F', 'N', 'S00004', '26-may-96', 'IP')
/


CREATE TABLE sales_order_details
(order_no varchar(6) CONSTRAINT sales_ord_de REFERENCES sales_order(order_no) ON DELETE CASCADE,
product_no varchar(6) CONSTRAINT sales_pro_mas REFERENCES product_master(product_no) ON DELETE CASCADE,
qty_ordered number(8),
qty_disp number(8),
product_rate number(10,2))
/
INSERT INTO sales_order_details (order_no, product_no, qty_ordered, qty_disp, product_rate) VALIES ('O19001', 'P00001', 4, 4, 525)
/
INSERT INTO sales_order_details (order_no, product_no, qty_ordered, qty_disp, product_rate) VALIES ('O19001', 'P07965', 2, 1, 8400)
/
INSERT INTO sales_order_details (order_no, product_no, qty_ordered, qty_disp, product_rate) VALIES ('O19001', 'P07885', 2, 1, 5250)
/
INSERT INTO sales_order_details (order_no, product_no, qty_ordered, qty_disp, product_rate) VALIES ('O19002', 'P00001', 10, 0, 525)
/
INSERT INTO sales_order_details (order_no, product_no, qty_ordered, qty_disp, product_rate) VALIES ('O46865', 'P07868', 3, 3, 3150)
/
INSERT INTO sales_order_details (order_no, product_no, qty_ordered, qty_disp, product_rate) VALIES ('O46865', 'P07885', 3, 1, 5250)
/
INSERT INTO sales_order_details (order_no, product_no, qty_ordered, qty_disp, product_rate) VALIES ('O46865', 'P00001', 10, 10, 525)
/
INSERT INTO sales_order_details (order_no, product_no, qty_ordered, qty_disp, product_rate) VALIES ('O46865', 'P03453', 4, 4, 1050)
/
INSERT INTO sales_order_details (order_no, product_no, qty_ordered, qty_disp, product_rate) VALIES ('O19003', 'P03453', 2, 2, 1050)
/
INSERT INTO sales_order_details (order_no, product_no, qty_ordered, qty_disp, product_rate) VALIES ('O19003', 'P06734', 1, 1, 12000)
/
INSERT INTO sales_order_details (order_no, product_no, qty_ordered, qty_disp, product_rate) VALIES ('O46866', 'P07965', 1, 0, 8400)
/
INSERT INTO sales_order_details (order_no, product_no, qty_ordered, qty_disp, product_rate) VALIES ('O46866', 'P07975', 1, 0, 1050)
/
INSERT INTO sales_order_details (order_no, product_no, qty_ordered, qty_disp, product_rate) VALIES ('O10008', 'P00001', 10, 5, 525)
/
INSERT INTO sales_order_details (order_no, product_no, qty_ordered, qty_disp, product_rate) VALIES ('O10008', 'P07975', 5, 3, 1050)
/


CREATE TABLE CHALLAN_HEADER
(CHALLAN_NO VARCHAR2(6) PRIMARY KEY,
ORDER_NO VARCHAR2(6) REFERENCES SALES_ORDER(ORDER_NO),
CHALLAN_DATE DATE NOT NULL,
BILLED_YN CHAR(1) DEFAULT 'N' CHECK( BILLED_YN IN ('Y','N')),
CONSTRAINT PRI_CH_H CHECK(CHALLAN_NO LIKE 'CH%'))
/
INSERT INTO challan_header (challan_no, order_no, challan_date, billed_yn) VALIES ('CH9001', 'O19001', '12-dec-95', 'Y')
/
INSERT INTO challan_header (challan_no, order_no, challan_date, billed_yn) VALIES ('CH6865', 'O46865', '12-nov-95', 'Y')
/
INSERT INTO challan_header (challan_no, order_no, challan_date, billed_yn) VALIES ('CH3965', 'O10008', '12-oct-95', 'Y')
/


CREATE TABLE CHALLAN_DETAILS
(CHALLAN_NO VARCHAR2(6) REFERENCES CHALLAN_HEADER(CHALLAN_NO),
PRODUCT_NO VARCHAR2(6) REFERENCES PRODUCT_MASTER(PRODUCT_NO),
QTY_DISP NUMBER(3))
/
INSERT INTO challan_header (challan_no, product_no, qty_disp) VALIES ('CH9001', 'P00001', '4')
/
INSERT INTO challan_header (challan_no, product_no, qty_disp) VALIES ('CH9001', 'P07965', '1')
/
INSERT INTO challan_header (challan_no, product_no, qty_disp) VALIES ('CH9001', 'P07885', '1')
/
INSERT INTO challan_header (challan_no, product_no, qty_disp) VALIES ('CH6865', 'P07868', '3')
/
INSERT INTO challan_header (challan_no, product_no, qty_disp) VALIES ('CH6865', 'P03453', '4')
/
INSERT INTO challan_header (challan_no, product_no, qty_disp) VALIES ('CH6865', 'P00001', '10')
/
INSERT INTO challan_header (challan_no, product_no, qty_disp) VALIES ('CH6865', 'P00001', '5')
/
INSERT INTO challan_header (challan_no, product_no, qty_disp) VALIES ('CH6865', 'P07975', '2')
/