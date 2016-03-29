# TvABCD - Teste - Backend
O objetivo do teste é conhecer as habilidades em:
- Programação
- Organização (código/arquivos)
- Controle de versão
- Análise/Entendimento de requisitos
- Capricho (atenção com urls, metatags, validações, modelagem, nomenclatura, ...)

### Requisitos
- [x] Modelagem de banco de dados para formulário. Os campos do formulário são: Nome, E-mail, Telefone
  Model Appointment
- [x] Modelagem de banco de dados para médicos. Os campos são: Nome, Especialidade, Celular, Descrição, Foto
  Model Doctor
- [x] Modelagem de banco de dados para clientes. Os campos são: Nome, Logotipo, Site
  Model Client
- [x] Persistir os dados do formulário (Make an appointment today) no banco de dados modelado. Os 3 campos são obrigatórios
  Controller Index@store
- [x] Após a persistência dos dados do formulário, enviar um e-mail para o administrador do sistema
  Controller Index@store
- [x] Após o envio do e-mail, direcionar usuário para tela de sucesso "appontment_success.html"
  Controller Index@store
- [x] Criar árae de acesso restrito para login com usuário/senha
  Controller Index@dashboard
- [x] Criar CRUD para médicos
  Controller Doctors
- [x] Criar CRUD para clientes
  Controller Clients
- [x] Criar consulta/exportação de leeds persistidos no formulário (Make an appointment today)
  Controller Clients
- [x] Exibir a lista de doutores persistidos, temos uma área chamada "Meet the Wealth.life Specialists Doctors"
  http://localhost:8000/
- [x] Ao clicar em um médico, exibir as informações deste médico na página "doctor.html"
  http://localhost:8000/doctor/1
- [x] Exibir a lista de clientes persistidos, temos uma área chamada "We trusted by thousand of client", ao clicar abrir o site do cliente
  http://localhost:8000/
- [x] Criar recurso REST para exibição de médicos com resposta em JSON
  http://localhost:8000/doctors
- [x] Criar recurso REST para exibição de informações de um médico específico com resposta em JSON
  http://localhost:8000/doctors/1

### O que devo utilizar ?
- Laravel 5.2
- PHP - Orientação a Objetos
- MVC
- Outros padrões de projeto serão um diferencial
- Template Engine - Blade
- Banco de Dados MySQL
- Composer
- Sinta-se a vontade para utilização de microframeworks caso necessário

### Como participar ?
- Fazer um fork deste repositório
- Programar para atender os requisitos
- Fazer um pull request quando finalizar. É importante que conste no pull request as instruções para execultar a aplicação desenolvida (preferencialmente usando markdown).

### Como ver o resultado
- Baixe o fork do sistema
```
git clone https://github.com/lfukumori/tvabcd-teste-backend.git
```
- Crie o banco de dados e insira alguns dados para exemplo (alternativamente pode criar todos os dados pelo sistema)
```
arquivo dump.sql
```
- Rode o servidor
```
php artisan serve
```
