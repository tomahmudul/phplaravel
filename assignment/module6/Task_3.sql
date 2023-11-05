SELECT 
    name as Category_Name,
    SUM(sub_total) as Total_Revenue
FROM
    (
        SELECT
            p.category_id,
            c.name,
            ROUND(SUM(o.quantity * o.unit_price), 2) as sub_total
        FROM
            order_items o
            INNER JOIN products p on p.product_id = o.product_id
            inner JOIN categories c on c.id = p.category_id
        GROUP BY
            o.product_id
    ) tmp
GROUP BY
    category_id
order by
    Total_Revenue DESC