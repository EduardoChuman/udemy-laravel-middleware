# udemy-laravel-middleware
<br>
Módulo 18 - Parte 1<br>
<br>
1. Criação de Middlewares.<br>
2. Formas de instanciação de Middlewares:<br>
    2.1. Uso de middleware direto na rota (com uso de namespaces).<br>
    2.2. Nomeação de middleware no Kernel.php para uso dinâmico (sem uso de namespace).<br>
    2.3. Inclusão do middleware no grupo de rotas (web ou api) no Kernel.php e assim chamá-los sem menção no código.<br>
3. Básico de como um middleware funciona.<br>
    3.1. Ordem de execução.<br>
        3.1.1. Antes do $next($request);<br>
        3.1.2. Após o $next($request)<br>
<br>
Com o conhecimento até agora posso imaginar formar de validação de dados antes e depois de retornar os métodos dos controllers.
