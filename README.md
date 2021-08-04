## Projeto sistema administrativo da plataforma E-Diaristas

Desenvolvido no curso multi-stack da Treinaweb

### Instalando o Projeto

#### Clonar o repositório

```
git clone https://github.com/danielrossi-gt/multistack-sistema-administrativo-ediaristas-php.git
```

#### Instalar as dependências

```
composer install
```

Ou em ambiente de desenvolvimento:

```
composer update
```

#### Criar arquivo de Configurações de Ambiente

Copiar o arquivo de exemplo `.env.example` para `.env` na raiz do projeto e configurar os detalhes da aplicação e conexão com o banco de dados.

#### Criar a estrutura no banco de dados

```
php artisan migrate
```

#### Iniciar o servidor de desenvolvimento

```
php artisan serve
```
