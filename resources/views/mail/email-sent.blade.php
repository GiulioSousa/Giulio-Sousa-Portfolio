<x-layout title="Giulio Sousa - Desenvolvedor Full Stack">
    <main class="container">
        <section class="email-sent">
            <img src="{{ asset('storage/img/email-sent.png') }}" alt="Imagem de uma carta, simbolizando o e-mail">
            <h1>Mensagem enviada com sucesso!</h1>
            <p>Em breve você receberá uma mensagem para o e-mail informado. <br>Desde já agradeço pelo contato.</p>
            <a href="{{ route('home.index') }}">Voltar para a página inicial</a>
        </section>
    </main>
</x-layout>