CREATE TABLE ORDER_LINE (
OL_O_ID INTEGER(255), #10,000,000 unique IDs
OL_D_ID INTEGER(20), #20 unique IDs
OL_W_ID INTEGER(10), #2*W unique IDs
OL_NUMBER INTEGER(15), #15 unique IDs
OL_I_ID INTEGER(255), #200,000 unique IDs
OL_SUPPLY_W_ID INTEGER(100), # 2*W unique IDs
OL_DELIVERY_D datetime, #or null
OL_QUANTITY numeric(2),
OL_AMOUNT NUMERIC(6,2),#signed numeric(6, 2),
OL_DIST_INFO char(24),#fixed text, size 24
Primary Key (OL_W_ID, OL_D_ID, OL_O_ID, OL_NUMBER),
Foreign Key(OL_W_ID, OL_D_ID, OL_O_ID)  references ORDERR(O_W_ID, O_D_ID, O_ID),
Foreign Key(OL_SUPPLY_W_ID, OL_I_ID)  references STOCK(S_W_ID, S_I_ID)
);