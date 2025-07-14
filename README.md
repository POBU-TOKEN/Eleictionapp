<p align="center">
    <a href="https://laravel.com" target="_blank">
        <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="300" alt="Laravel Logo">
    </a>
</p>

<h1 align="center">🗳️ EleictionApp</h1>
<p align="center">Um sistema simples e seguro de enquetes online com autenticação separada para Administradores e Eleitores.</p>

---

## 🚀 Sobre o Projeto

**EleictionApp** é um sistema de enquetes online construído com [Laravel](https://laravel.com), projetado para permitir:

- Autenticação distinta para **administradores** e **eleitores**
- Criação e gerenciamento de enquetes (Admin)
- Participação anônima e segura dos votos (Voter)
- Interface amigável e responsiva

---

## ⚙️ Funcionalidades

- 🧑‍⚖️ Área de login/admin para gerenciar enquetes
- 🗳️ Área de votação segura e simples para eleitores
- 🔒 Registro seguro dos votos
- 📊 Resultados protegidos contra fraudes
- 🌐 Layout responsivo com template HTML

---

## 🧰 Tecnologias Utilizadas

- PHP 8+
- Laravel 10+
- SQLite (para ambiente local)
- Blade Templating
- HTML5 / CSS3 / JavaScript

---

## 🧪 Como rodar o projeto localmente

```bash
# Clone o repositório
git clone https://github.com/POBU-TOKEN/Eleictionapp.git

# Acesse a pasta
cd Eleictionapp

# Instale as dependências
composer install

# Crie o arquivo .env e configure
cp .env.example .env

# Geração da chave
php artisan key:generate

# Banco de dados (SQLite já incluso)
touch database/eleiction.sqlite
php artisan migrate --seed

# Inicie o servidor local
php artisan serve
