# udemy-laravel-middleware

<h1>Módulo 18 - Parte 1</h1>
<ol>
    <li>Criação de Middlewares.</li>
    <li>Formas de instanciação de Middlewares:</li>
    <ol>
        <li>Uso de middleware direto na rota (com uso de namespaces).</li>
        <li>Nomeação de middleware no Kernel.php para uso dinâmico (sem uso de namespace).</li>
        <li>Inclusão do middleware no grupo de rotas (web ou api) no Kernel.php e assim chamá-los sem menção no código.</li>
    </ol>
    <li>Básico de como um middleware funciona.</li>
    <ul>
        <li>Ordem de execução.</li>
        <ul>
            <li>Antes do $next($request);</li>
            <li>Após o $next($request)</li>
        </ul>
    </ul>
</ol>
<br>
<p>Com o conhecimento até agora posso imaginar formar de validação de dados antes e depois de retornar os métodos dos controllers.<p>
