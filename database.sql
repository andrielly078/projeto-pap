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

INSERT INTO receitas (
    titulo,
    descricao,
    video_url,
    categoria,
    ingredientes,
    modo_preparo,
    url_pagina
)
VALUES
    (
        'Brigadeiro',
        'Clássico doce brasileiro de chocolate',
        'https://www.youtube.com/embed/6b8mygSR51s',
        'sobremesas',
        '- 1 lata de leite condensado\n- 2 colheres de sopa de chocolate em pó\n- 1 colher de sopa de manteiga\n- Chocolate granulado para decorar',
        '1. Misture todos os ingredientes em uma panela\n2. Cozinhe em fogo baixo até desgrudar do fundo\n3. Deixe esfriar e faça bolinhas\n4. Passe no granulado',
        'brigadeiro.php'
    ),
    (
        'Coxinha',
        'Salgadinho brasileiro de frango',
        'https://www.youtube.com/embed/JJS9x54pIgQ',
        'lanches',
        '- 2 xícaras de frango desfiado\n- 2 xícaras de farinha de trigo\n- 1 xícara de leite\n- 1 cubo de caldo de galinha\n- Farinha de rosca para empanar',
        '1. Prepare o recheio de frango\n2. Faça a massa\n3. Modele as coxinhas\n4. Empane e frite',
        'coxinha.php'
    ),
    (
        'Bolo Red Velvet',
        'Bolo aveludado vermelho com cream cheese',
        'https://www.youtube.com/embed/uLT2jwb3XQI',
        'sobremesas',
        '- 2 xícaras de farinha de trigo\n- 1 xícara de açúcar\n- 1 xícara de óleo\n- 1 xícara de leitelho\n- 2 ovos\n- Corante alimentício vermelho',
        '1. Misture os ingredientes secos\n2. Adicione os líquidos\n3. Asse por 40 minutos\n4. Prepare o frosting de cream cheese',
        'bolo_red_velvet.php'
    );
