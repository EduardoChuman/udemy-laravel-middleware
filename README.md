# udemy-laravel-middleware

Módulo 18 - Parte 1

1. Criação de Middlewares.
2. Formas de instanciação de Middlewares:
    2.1. Uso de middleware direto na rota (com uso de namespaces).
    2.2. Nomeação de middleware no Kernel.php para uso dinâmico (sem uso de namespace).
    2.3. Inclusão do middleware no grupo de rotas (web ou api) no Kernel.php e assim chamá-los sem menção no código.
3. Básico de como um middleware funciona.
    3.1. Ordem de execução.
        3.1.1. Antes do $next($request);
        3.1.2. Após o $next($request)

Com o conhecimento até agora posso imaginar formar de validação de dados antes e depois de retornar os métodos dos controllers.
