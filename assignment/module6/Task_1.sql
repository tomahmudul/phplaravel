SELECT
    customers.customer_id,
    customers.name,
    customers.email,
    customers.location,
    IFNULL(Numbers, 0) as number_of_orders
from
    customers
    left join (
        SELECT
            orders.customer_id,
            count(*) as Numbers
        FROM
            orders
        GROUP by
            orders.customer_id
    ) as o on customers.customer_id = o.customer_id
order by
    number_of_orders desc, name asc