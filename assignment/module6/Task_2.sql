SELECT        
    p.name as Product_Name,
    SUM(oi.quantity)  as Quantity,    
    SUM(ROUND(oi.quantity * oi.unit_price, 2) ) as Total_Amount
FROM
    order_items oi
    INNER JOIN products p on p.product_id = oi.product_id
            
GROUP by Product_Name         

order by oi.order_id asc