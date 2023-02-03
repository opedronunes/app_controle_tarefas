# App para controle de tarefas

**Laravel UI**
<br>
Para entender como este pacote funciona, ele nos permite iniciar projetos com pré-definições de Front-end, podendo ser baseadas em Frameworks javascript (React, Vue e um kit CSS Bootstrap).
<br>
<p>
Para utilizar os pacotes, basta clicar neste link:
<a href="https://github.com/laravel/ui" target="_blank">Laravel UI</a>
</p>
<hr>

**Envio de E-mails**
<br>
No framework podemos de maneira fácil montar uma estrutura de envio d e-mails com layouts pré-definidos. Neste exemplo configuramos utilizamos o SMTP do Gmail configurado no arquivo *.env*.
<p>
Para montar uma estrutura dentro do framework, cria-se uma classe, e uma view referente ao modelo de envio de emails com o parâmetro --markdown com o seguinte comando:

```
php artisan make:mail MensagemTesteMail --markdown emails.mensagem-teste
```
Se repararmos, temos trÊs parâmetros, o primeiro é a classe, o segundo o método, e por último a view.
</p>

<p>
Utiliza-se o método abaixo na linha de comando para poder publicar o templete da view de email dentro do diretório resource, desta maneira é possível customizá-la.

```
php artisan vendor:publish
```
</p>

**Verificação de emails**
<p>
Importante método para inibir possíveis cadastros com emails inválidos, dessa maneira evitar um possível ataque hacker na aplicação ou pessoas mau intecionadas.
</p>

Utilizando o método nativo do laravel para verificação, temos no modelo User o método chamado *MustVerifyEmail*. Com ele podemos chamar na classe User implementando-o e modificando nas rotas por meio do middleware.

```
class User extends Authenticatable implements MustVerifyEmail

Route::resource('tarefa', TarefaController::class)
    ->middleware('verified');
```



<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
