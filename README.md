# Layout 4rodas - WP

Menu responsivo de **4rodas** aplicado em tema base WP.

### Banco de dados

Na raiz, há o arquivo **db.sql** contendo a estrutura WP e configurações básicas (aplicação do tema, por exemplo).

A URL local usada para o desenvolvimento foi http://www.4rodas.local

### Front-end

Pelas características dos arquivos PSD, com conteúdo flat (sem layers) e apenas partes do menu, decidi utilizar parte do conteúdo do site ativo para formar um menu mais completo.

Itens que não tinham ação mostrada no layout foram desconsideradas, apenas atendendo a solicitação enviada.

Há anotações nos códigos explicando o motivo de cada decisão.

### Configuração

Os dados do servidor MySQL devem ser editados no arquivo /wp-config.php

Caso exita algum problema relacionado ao charset, editar a linha abaixo:

```php
define('DB_CHARSET', 'utf8mb4');
```

para:

```php
define('DB_CHARSET', 'utf8');
```

### Login e senha

Para acessar o admin, basta usar os dados abaixo.

**Login**: admin

**Senha**: 4_rodas