


/*USERS*/

INSERT INTO users 
    (lastName, firstName, email, phone, password, role)
VALUES 
    ('Big', 'Boss', 'boss@gmail.com','0987654321',
    '$2y$10$mG/2P56tzDpkR9pSO6/zbOTsyXrtPWSFJEcURxoSJP/KdVMWVcUWi',
    'BOSSER'),
    ('Big', 'Bang', 'bang@gmail.com','1234567890',
    '$2y$10$mG/2P56tzDpkR9pSO6/zbOTsyXrtPWSFJEcURxoSJP/KdVMWVcUWi',
    'BANGER'),
    ('Big', 'Cash', 'cash@gmail.com','5678901234',
    '$2y$10$mG/2P56tzDpkR9pSO6/zbOTsyXrtPWSFJEcURxoSJP/KdVMWVcUWi',
    'CASHER');


/*CATEGORIES*/

INSERT INTO categories 
    (name, slug, id_categories)
VALUES 
    ('Football','surf' , NULL),
    ('Petit pont','petit-pont' , 1), 
    ('Crochet','crochet' , 1),
    ('Basket', 'basket', NULL),
    ('Dunk', 'dunk', 4);


/*POSTS*/

INSERT INTO posts
    (title, slug, content, createdAt, updatedAt, image, active, id_users, id_categories)
VALUES
    ("James Milner évoque le magnifique petit-pont qu'il a subit par Leo Messi", 
    'james-milner-evoque-le-magnifique-petitpont-quil-a-subit-par-leo-messi',
    "Il a expliqué son choix: Messi doit être là. J'ai joué contre lui plusieurs fois en Ligue des champions et 
    la plupart des gens se souviennent probablement du petit-pont qu'il a fait sur moi. Je ne suis pas le premier et 
    je ne serai pas le dernier qu'il dribblera.",
    '2020-03-19', 
    '2024-03-21',
    'https://pictures.tribuna.com/image/1ee577cc-2e6e-45bb-a1a8-3d00fa28b80f?width=640&quality=70',
    TRUE,
    1,
    1),

    ('Maîtriser les Crochets : Techniques Essentielles pour Dribbler dans le Football',
    'maitriser-crochets-techniques-dribbler-football',
    "Les crochets dans le football sont des mouvements techniques utilisés par les joueurs pour dribbler leurs adversaires et 
    progresser sur le terrain. Un crochet consiste à changer brusquement de direction en utilisant principalement le pied pour 
    déplacer le ballon sur un côté, tandis que le corps du joueur se déplace dans une direction différente. C'est une technique 
    très efficace pour éliminer un défenseur en lui faisant croire que le joueur va dans une direction, puis en changeant 
    rapidement de direction dans l'autre sens. Les crochets peuvent être exécutés avec différents types de mouvements de pied,
    tels que les crochets intérieurs, les crochets extérieurs et les crochets enroulés, chacun ayant ses propres subtilités et 
    utilisations tactiques. Les joueurs de haut niveau maîtrisent souvent ces mouvements pour créer des ouvertures dans 
    la défense adverse et créer des opportunités de marquer ou de passer le ballon à un coéquipier",
    '2014-03-19', 
    '2022-03-21',
    'https://s1.static-footeo.com/uploads/unionfossesfootball/Medias/0%20%20%20-%20robben__qdcn13.png',
    FALSE,
    2,
    1),

    ( "Le Dunk dans le Basketball : Maîtrisez l'Art du Saut et de la Précision",
    'dunk-basketball-maitrisez-art-saut-precision',
    "Le dunk, une des actions les plus spectaculaires du basketball, consiste à sauter suffisamment haut pour placer 
    le ballon directement dans le panier, en le tenant fermement dans une main. Cette manœuvre impressionnante nécessite 
    force, agilité et coordination. Les joueurs qui maîtrisent l'art du dunk peuvent élever le niveau d'excitation sur le 
    terrain et galvaniser leur équipe ainsi que les supporters. Outre son aspect visuel époustouflant, le dunk peut également 
    changer le cours d'un match en apportant un élan psychologique significatif à l'équipe qui l'exécute. De nombreux joueurs 
    de basketball passent des heures à s'entraîner pour perfectionner leur technique de saut, leur timing et leur précision afin 
    de réaliser des dunks incroyables lors des matchs. La réussite d'un dunk peut souvent être le point culminant d'une action 
    offensive bien orchestrée ou d'une contre-attaque rapide, propulsant l'équipe vers la victoire.",
    '2010-03-19', 
    '2023-03-21',
    'https://upload.wikimedia.org/wikipedia/commons/3/35/Kevin_Durant_dunk.jpg',
    TRUE,
    3,
    4);



/*TAGS*/

INSERT INTO tags
    (name, slug)
VALUES
    ('Waaaah', 'waaaah'),
    ('Top','top'),
    ('Bang','bang');


/*COMMENTS*/

INSERT INTO comments
    (content, createdAt, id_users, id_posts)
VALUES
    ("Oh my God! Messi est le footBall", '2017-03-12',1,1),
    ("Oh", '2010-03-12',2,1),
    ("Baaaaaannngggg§", '2024-03-12',3,1);

    