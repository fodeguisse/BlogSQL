/*HomePage*/

SELECT image, updatedAt, title, A.slug as postSlug, LEFT(A.content, 150) AS content, name, B.slug as categorySlug, lastName, firstName, COUNT(D.id) AS nbComments
FROM posts A
INNER JOIN categories B ON A.id_categories = B.id
INNER JOIN users C ON id_users = C.id
LEFT JOIN comments D ON D.id_posts = A.id
WHERE active = TRUE
GROUP BY A.id
ORDER BY updatedAt DESC
LIMIT 10;

/* Page détail */
SELECT image, createdAt, updatedAt, title, A.content, name, B.slug, lastName, firstName, email
FROM posts A
INNER JOIN categories B ON A.id_categories = B.id
INNER JOIN users C ON id_users = C.id
WHERE active = TRUE
    AND A.id = 1;


/*Page déatail comments*/
SELECT firstName, lastName, A.content, A.createdAt 
from comments A  
INNER JOIN users B on B.id = A.id_users 
where A.id_posts = 1 
ORDER BY createdAt DESC;

/*LOGIN*/
SELECT id, lastName, firstName, password, email, role
FROM users 
WHERE email = 'cash@gmail.com';
