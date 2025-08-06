README.md

markdown
Copy
Edit
# 📋 Sistema de Controle de Usuários - Laravel

Este projeto é um sistema simples de **Controle de Usuários (CRUD)** desenvolvido com **Laravel** e **Bootstrap**, utilizando **Blade** como engine de templates e **MySQL** (ou SQLite) como banco de dados.

---

## 🚀 Funcionalidades

- ✅ Cadastro de usuários
- ✅ Edição de usuários
- ✅ Exclusão de usuários
- ✅ Listagem de usuários
- ✅ Autenticação de login (Laravel Breeze)
- ✅ Proteção de rotas para usuários autenticados
- ✅ Logout seguro
- ✅ Middleware para bloqueio de usuários

---

## 🛠 Tecnologias Utilizadas

- **PHP** 8.4+
- **Laravel** 12.x
- **Bootstrap** 5
- **Blade** (template engine)
- **MySQL** ou **SQLite**
- **Laravel Breeze** para autenticação

---

## 📦 Instalação

### 1️⃣ Clonar o repositório
```bash
git clone https://github.com/SEU-USUARIO/controle-usuarios.git
cd controle-usuarios
2️⃣ Instalar dependências
bash
Copy
Edit
composer install
npm install
3️⃣ Configurar variáveis de ambiente
Copie o arquivo .env.example para .env:

bash
Copy
Edit
cp .env.example .env
Configure as credenciais do banco de dados no .env

Gere a chave da aplicação:

bash
Copy
Edit
php artisan key:generate
4️⃣ Criar as tabelas
bash
Copy
Edit
php artisan migrate
5️⃣ Rodar o servidor
bash
Copy
Edit
php artisan serve
Acesse em: http://localhost:8000

🔑 Login e Usuário Inicial
Para criar um usuário inicial via tinker:

bash
Copy
Edit
php artisan tinker
php
Copy
Edit
\App\Models\User::create([
    'name' => 'Admin',
    'email' => 'admin@email.com',
    'password' => bcrypt('senha123')
]);
🖼 Capturas de Tela
Tela de Login

Lista de Usuários

📂 Estrutura de Pastas (resumida)
bash
Copy
Edit
controle-usuarios/
├── app/
│   ├── Http/
│   │   ├── Controllers/
│   │   │   └── UserController.php
│   │   ├── Middleware/
│   │   └── ...
│   ├── Models/
│   │   └── User.php
│   └── ...
├── resources/
│   ├── views/
│   │   ├── users/
│   │   │   ├── index.blade.php
│   │   │   ├── create.blade.php
│   │   │   ├── edit.blade.php
│   │   │   └── show.blade.php
│   │   └── dashboard.blade.php
├── routes/
│   └── web.php
├── database/
│   └── migrations/
└── ...
📜 Licença
Este projeto está licenciado sob a MIT License.

yaml
Copy
Edit

---







