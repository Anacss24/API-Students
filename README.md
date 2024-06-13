     
 ## API RESTful no PHP Laravel
 
 ## Descrição
 
 Este projeto é uma API que fornece os registros de uma escola.
 
 Aplicação de registro do aluno com `Name` e `Course`
 
 Versão Xampp utilizada: 8.2.4
 
 Versão Laravel utilizada: 10.22.0

 Versão PHP utilizada: 8.2.4
 
 Projeto base: https://www.twilio.com/pt-br/blog/criar-e-consumir-uma-api-restful-no-php-laravel
 
## 🚀 Pré- Requisitos 

Software necessários para a instalação:

<ul>
 <li>PHP 7.1 ou superior</li>
 <li>Composer</li>
 <li>MySql</li>
 <li>Laravel </li>
 <li>Postman</li>
</ul>

## 🔧 Instalação

Clonar o projeto
```
git clone http://10.6.43.209:3000/Estagiarios/API-Students.git
    
```
Entrar no diretório criado 
```
cd API-Students
```
Instalar as dependências do projeto
```
composer install
composer update
```

Crie o Arquivo .env
```
cp .env.example .env

```
Atualize as variáveis de ambiente do arquivo .env

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE= ""
DB_USERNAME=root
DB_PASSWORD= ""

```
```
Importar as tabelas do arquivo Dump para o banco de dados.
```

Gerar a key do projeto Laravel
```
php artisan key:generate
```
Migrar as tabelas 
```
php artisan migrate
```

Iniciar o servidor 
```
php artisan serve
```

## ✔️ Regras de Validação
``` 
    'name' => 'required|string|min:3|max:100',
    'course' => 'required|string',
```
### ⚙️ Testes 

Iniciar os testes:
```
    php artisan test
```

## 🛣️ Métodos

| Método | Descrição  |
| --- | --- |
| `GET` |  Retorna informações de um ou mais registros.| 
| `POST` | Utilizado para criar um novo registro.  |
| `PUT` |  Utilizado para criar um novo registro. |
| `DELETE` | Remove um registro do sistema.  |

## Acessar o projeto 
```
    http://localhost:8000/api/students
```


## Autor

 Ana Claudia Santana 

