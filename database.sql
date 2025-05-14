USE trabalho_pap;
CREATE TABLE receitas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(255) NOT NULL,
    descricao TEXT,
    video_url VARCHAR(255),
    categoria VARCHAR(50),
    ingredientes TEXT,
    modo_preparo TEXT,
    url_pagina VARCHAR(255)
);
-- Inserir dados de exemplo nas receitas
INSERT INTO receitas (
        titulo,
        descricao,
        video_url,
        categoria,
        ingredientes,
        modo_preparo,
        url_pagina
    )
VALUES (
        'Pastel de Nata',
        'Tradicional pastel de nata português',
        'https://youtube.com/embed/PrFfgT4yNZY',
        'sobremesas',
        '- 500g de massa folhada\n- 500ml de leite\n- 6 gemas\n- 200g de açúcar',
        '1. Prepare a massa...\n2. Faça o recheio...',
        'pasteldenata.php'
    ),
    (
        'Pão de Queijo',
        'Delicioso pão de queijo mineiro',
        'https://www.youtube.com/embed/noDZZXzImv8',
        'lanches',
        '- 500g de polvilho\n- 300g de queijo\n- 3 ovos\n- 1 xícara de leite',
        '1. Misture os ingredientes...\n2. Asse...',
        'paodequeijo.php'
    ),
    (
        'Lasanha',
        'Lasanha tradicional italiana',
        'https://www.youtube.com/embed/MokF1BlAqpI',
        'almoco',
        '- Massa de lasanha\n- Molho bolonhesa\n- Queijo\n- Presunto',
        '1. Monte as camadas...\n2. Asse por 45 minutos...',
        'lasanha.php'
    );