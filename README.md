
<h1 align="center">🗳️ EleictionApp</h1>
<p align="center">Um sistema moderno de enquetes online com autenticação separada para Administradores e Eleitores.</p>

---

## 🚀 Sobre o Projeto

**EleictionApp** é uma plataforma web construída com o framework [Laravel](https://laravel.com), voltada para a **realização de enquetes online seguras**, com foco em **integridade de votos, organização administrativa e facilidade de uso**.

O sistema foi pensado para situações onde é necessário realizar votações entre grupos distintos, como:

- Eleições internas (escolares, acadêmicas, empresariais)
- Pesquisas de opinião
- Decisões de assembleias ou reuniões remotas

Com autenticação separada por função, o sistema garante que apenas usuários autorizados possam **criar**, **gerenciar** ou **participar** das enquetes.

---

## ⚙️ Funcionalidades

- 🧑‍💼 Login seguro com separação clara entre **Administradores** e **Eleitores**
- 🗳️ Criação de enquetes com múltiplas opções de voto
- 🔐 Votação única por eleitor, de forma **anônima e protegida**
- 📊 Painel de administração com visualização dos resultados em tempo real
- 🎨 Interface amigável baseada em um template HTML responsivo
- 🔁 Seeders para simulação e testes de votos

---

## 🧰 Tecnologias Utilizadas

- **PHP 8+**
- **Laravel 12.x**
- **MySQL** (pode ser adaptado para SQLite ou PostgreSQL)
- **Blade Templating Engine**
- **HTML5, CSS3, JavaScript**
- **Composer** (gerenciador de dependências PHP)

---

## 🧪 Como rodar o projeto localmente

```bash
# Clone o repositório
git clone https://github.com/POBU-TOKEN/Eleictionapp.git

# Acesse o diretório do projeto
cd Eleictionapp

# Instale as dependências PHP
composer install

# Copie o arquivo de configuração do ambiente
cp .env.example .env

# Gere a chave da aplicação
php artisan key:generate

# Configure o banco de dados no arquivo .env (MySQL)
# Exemplo:
# DB_CONNECTION=mysql
# DB_HOST=127.0.0.1
# DB_PORT=3306
# DB_DATABASE=eleiction
# DB_USERNAME=root
# DB_PASSWORD=

# Rode as migrations e seeders
php artisan migrate --seed

# Inicie o servidor local
php artisan serve
