SELECT
  c.name as Customer_Name,
  SUM(total_amount) as Total_Purchase_Amount
FROM
  orders o
  INNER JOIN customers c on c.customer_id = o.customer_id
GROUP by
  o.customer_id
order by
  Total_Purchase_Amount DESC
limit
  5