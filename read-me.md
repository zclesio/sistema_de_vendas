**Login** controller/login.php -> 'name' and 'password'-> return 'tipo de usuario'(0-vendedor, 1-admin)

**Adicionar produtos** controller/produtos ->'produto'->'adicionar', ['id'], 'nome', 'tipo', 'unidade', 'preco', ['stock'] -> true or tal erro;

**Listar produtos** controller/produtos.php -> 'get'='all' -> JSON;

**Vender produto**

**Adicionar usuario** controller/usuarios -> 'usuario'->'adicionar', ['id'], 'user_name', 'password', 'tipo', 'name' -> true or tal erro;

**Ver usuarios** controller/usuarios.php -> 'get'='all' -> JSON;

**Ver historico** controller/usuarios.php -> 'historic'='user_name' -> JSON;

**deletar usuario** controller/usuarios.php -> 'delete'='user_name' -> true or tal erro;
