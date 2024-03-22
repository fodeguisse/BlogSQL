/*HomePage*/

SELECT image, updatedAt, title, A.slug, LEFT(content, 150), name, C.slug, lastName, firstName
FROM posts A
INNER JOIN users B ON A.id_users = B.id
INNER JOIN categories C ON A.id_categories = C.id
WHERE active = TRUE
ORDER BY updatedAt DESC
LIMIT 10;