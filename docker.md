# **DOCUMENTAÇÃO DO AMBIENTE DOCKER PHP**

## **ÍNDICE**
1. [Visão Geral](#visão-geral)
2. [Pré-requisitos](#pré-requisitos)
3. [Estrutura do Projeto](#estrutura-do-projeto)
4. [Configuração do Ambiente](#configuração-do-ambiente)
5. [Comandos Docker](#comandos-docker)
6. [Acesso aos Serviços](#acesso-aos-serviços)
7. [Desenvolvimento PHP](#desenvolvimento-php)
8. [Banco de Dados MySQL](#banco-de-dados-mysql)
9. [Solução de Problemas](#solução-de-problemas)
10. [FAQ](#faq)

---

## **VISÃO GERAL**

Ambiente Docker completo para desenvolvimento PHP com:
- **PHP 8.2** com Apache
- **MySQL 8.0** 
- Configuração otimizada para estudos e projetos PHP

**Tecnologias:** Docker, Docker Compose, PHP 8.2, Apache, MySQL 8.0

---

## **PRÉ-REQUISITOS**

### **1. Software Necessário**
- [Docker Desktop](https://www.docker.com/products/docker-desktop/)
- [Git](https://git-scm.com/) (opcional)
- Terminal (PowerShell, CMD ou WSL2)

### **2. Verificação de Instalação**
```bash
# Verifique as versões
docker --version
docker compose version
git --version
```

### **3. Configuração Inicial**
```bash
# Clone ou crie o projeto
git clone [seu-repositorio]
cd Pratica-PHP
```

---

## **ESTRUTURA DO PROJETO**

```
PRATICA-PHP/
├── docker-compose.yml          # Configuração dos containers
├── html/                       # Seus arquivos PHP (web root)
│   ├── index.php              # Página inicial
│   ├── info.php               # PHP Info
│   └── PHPpoo/                # Seus projetos PHP
│       ├── atividadesPOO/
│       ├── CursoPHP/
│       ├── aula2.php
│       ├── aula3.php
│       ├── aula4.php
│       ├── Anotações.md
│       ├── git.md
│       └── README.md
├── mysql-data/                 # Dados do MySQL (criado automaticamente)
└── README.md                   # Esta documentação
```

### **Descrição das Pastas**
- **`html/`**: Raiz do servidor web (Apache)
- **`html/PHPpoo/`**: Seus projetos e estudos de PHP OO
- **`mysql-data/`**: Volume persistente do MySQL

---

## **CONFIGURAÇÃO DO AMBIENTE**

### **1. Arquivo `docker-compose.yml`**
```yaml
services:
  php:
    image: php:8.2-apache
    container_name: pratica-php
    ports:
      - "8080:80"
    volumes:
      - ./html:/var/www/html
    working_dir: /var/www/html

  mysql:
    image: mysql:8.0
    container_name: pratica-mysql
    ports:
      - "3306:3306"
    environment:
      MYSQL_ROOT_PASSWORD: rootpassword
      MYSQL_DATABASE: pratica_php
```

### **2. Variáveis de Ambiente**
| Variável | Valor Padrão | Descrição |
|----------|--------------|-----------|
| MYSQL_ROOT_PASSWORD | rootpassword | Senha do root MySQL |
| MYSQL_DATABASE | pratica_php | Banco de dados padrão |

### **3. Portas Mapeadas**
| Serviço | Porta Host | Porta Container | Acesso |
|---------|------------|-----------------|---------|
| PHP/Apache | 8080 | 80 | http://localhost:8080 |
| MySQL | 3306 | 3306 | localhost:3306 |

---

## **COMANDOS DOCKER**

### **Inicialização**
```bash
# Iniciar todos os serviços
docker compose up -d

# Iniciar e reconstruir imagens
docker compose up -d --build

# Verificar status
docker compose ps
```

### **Gerenciamento**
```bash
# Parar serviços
docker compose stop

# Iniciar serviços parados
docker compose start

# Parar e remover containers
docker compose down

# Parar, remover e limpar volumes
docker compose down -v
```

### **Monitoramento**
```bash
# Ver logs em tempo real
docker compose logs -f

# Ver logs específicos
docker compose logs php
docker compose logs mysql

# Ver logs das últimas 50 linhas
docker compose logs --tail=50 php
```

### **Acesso aos Containers**
```bash
# Acessar terminal do container PHP
docker compose exec php bash

# Executar comando específico
docker compose exec php php -v
docker compose exec php composer install

# Acessar MySQL via linha de comando
docker compose exec mysql mysql -uroot -prootpassword
```

---

## **ACESSO AOS SERVIÇOS**

### **1. Servidor Web (PHP/Apache)**
```
URL: http://localhost:8080
```
- **Página inicial:** http://localhost:8080/
- **PHP Info:** http://localhost:8080/info.php
- **Seus projetos:** http://localhost:8080/PHPpoo/

### **2. Banco de Dados MySQL**
```
Host: localhost
Porta: 3306
Usuário: root
Senha: rootpassword
Banco: pratica_php
```

### **3. Conexão via PHP**
```php
<?php
$host = "mysql";  // Nome do serviço no docker-compose
$user = "root";
$pass = "rootpassword";
$db   = "pratica_php";

// Conexão PDO
$pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

// Conexão MySQLi
$conn = new mysqli($host, $user, $pass, $db);
?>
```

---

## **DESENVOLVIMENTO PHP**

### **1. Adicionar Novos Arquivos**
```bash
# Basta adicionar na pasta html/
# Exemplo:
cp novo-arquivo.php html/PHPpoo/
# Acesse: http://localhost:8080/PHPpoo/novo-arquivo.php
```

### **2. Extensões PHP Disponíveis**
O container inclui:
- PDO MySQL
- MySQLi
- GD Library
- ZIP
- XML

### **3. Configuração PHP Personalizada**
```bash
# Para adicionar extensões, crie um Dockerfile:
# FROM php:8.2-apache
# RUN docker-php-ext-install pdo_mysql mysqli gd zip
```

### **4. Composer (Gerenciador de Dependências)**
```bash
# Acesse o container
docker compose exec php bash

# Instale dependências
composer install

# Ou execute diretamente
docker compose exec php composer install
```

---

## **BANCO DE DADOS MYSQL**

### **1. Comandos Úteis**
```bash
# Acessar console MySQL
docker compose exec mysql mysql -uroot -prootpassword

# Backup do banco
docker compose exec mysql mysqldump -uroot -prootpassword pratica_php > backup.sql

# Restaurar backup
docker compose exec mysql mysql -uroot -prootpassword pratica_php < backup.sql

# Criar novo banco
docker compose exec mysql mysql -uroot -prootpassword -e "CREATE DATABASE novo_banco;"
```

### **2. Script de Inicialização**
Para criar tabelas automaticamente, crie `init.sql`:
```sql
-- Arquivo: init.sql
USE pratica_php;

CREATE TABLE IF NOT EXISTS usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100),
    email VARCHAR(100) UNIQUE,
    criado_em TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```

### **3. Gerenciar Dados**
```bash
# Listar bancos
docker compose exec mysql mysql -uroot -prootpassword -e "SHOW DATABASES;"

# Listar tabelas
docker compose exec mysql mysql -uroot -prootpassword pratica_php -e "SHOW TABLES;"
```

---

## **SOLUÇÃO DE PROBLEMAS**

### **1. Erro: Porta já em uso**
```bash
# Verifique portas em uso
netstat -ano | findstr :8080  # Windows
lsof -i :8080                 # Linux/Mac

# Altere a porta no docker-compose.yml
# ports:
#   - "8082:80"  # Mude 8080 para 8082
```

### **2. Erro: 403 Forbidden**
```bash
# Crie index.php
echo "<?php echo 'Hello World'; ?>" > html/index.php

# Ou habilite directory listing
echo "Options +Indexes" > html/.htaccess
```

### **3. Erro: MySQL não conecta**
```bash
# Verifique se MySQL está rodando
docker compose exec mysql mysqladmin -uroot -prootpassword ping

# Verifique logs
docker compose logs mysql
```

### **4. Arquivos não aparecem**
```bash
# Verifique se o volume está montado
docker compose exec php ls -la /var/www/html

# Corrija permissões
docker compose exec php chmod -R 755 /var/www/html
docker compose exec php chown -R www-data:www-data /var/www/html
```

### **5. Limpar Ambiente Corrompido**
```bash
# Parar e remover tudo
docker compose down -v

# Limpar cache do Docker
docker system prune -a

# Reconstruir
docker compose up -d --build
```

---


## **FLUXO DE TRABALHO RECOMENDADO**

1. **Iniciar ambiente:**
   ```bash
   docker compose up -d
   ```

2. **Desenvolver:**
   - Edite arquivos em `html/`
   - Teste em http://localhost:8080/

3. **Trabalhar com banco:**
   ```bash
   docker compose exec mysql mysql -uroot -prootpassword
   ```

4. **Monitorar:**
   ```bash
   docker compose logs -f php
   ```

5. **Parar:**
   ```bash
   docker compose down
   ```

---

## **EXEMPLOS PRÁTICOS**

### **1. Projeto PHP Simples**
```php
<?php
// html/exemplo.php
echo "<h1>Teste Docker PHP</h1>";
echo "Data: " . date('d/m/Y H:i:s');

// Conectar ao MySQL
$conn = new mysqli('mysql', 'root', 'rootpassword', 'pratica_php');
if ($conn->connect_error) {
    die("Erro: " . $conn->connect_error);
}
echo "<p>✅ MySQL Conectado!</p>";
?>
```

### **2. Configuração de Projeto Real**
```
html/meu-projeto/
├── index.php
├── config/
│   └── database.php
├── src/
│   ├── Models/
│   └── Controllers/
├── public/
│   └── assets/
└── composer.json
```

### **3. .htaccess para Rewrite Rules**
```apache
# html/.htaccess
RewriteEngine On
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule ^(.*)$ index.php?url=$1 [QSA,L]
```

---

## **LINKS ÚTEIS**

- [Documentação Docker](https://docs.docker.com/)
- [Documentação PHP](https://www.php.net/docs.php)
- [Documentação MySQL](https://dev.mysql.com/doc/)
- [Imagens Docker Oficiais](https://hub.docker.com/_/php)
- [Docker Compose Reference](https://docs.docker.com/compose/compose-file/)

---

## **SUPORTE**

### **Problemas Comuns e Soluções**

| Problema | Causa | Solução |
|----------|-------|---------|
| Container não inicia | Porta ocupada | Mude a porta no docker-compose.yml |
| MySQL não conecta | Senha incorreta | Verifique MYSQL_ROOT_PASSWORD |
| Arquivos não aparecem | Volume não montado | Verifique caminho em `volumes:` |
| PHP errors não mostram | display_errors off | Adicione `php.ini` com `display_errors=On` |

### **Onde Buscar Ajuda**
1. Verifique logs: `docker compose logs`
2. Consulte esta documentação
3. Stack Overflow com tags [docker] [php] [mysql]
4. Documentação oficial das tecnologias

---

**Ambiente configurado e pronto para desenvolvimento!**

Última atualização: Dezembro 2025  
Versão: 1.0  
Ambiente: Docker PHP 8.2 + MySQL 8.0

---
*Documentação mantida em: `html/PHPpoo/README.md`*