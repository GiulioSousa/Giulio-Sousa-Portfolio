<x-layout title="Contato | Giulio Sousa - Desenvolvedor Full Stack">
    <main class="container container--contact">
        <section class="contact">
            <h1>Contato</h1>
            <div class="contact__banner">
                <div class="contact__banner-content">
                    <img src="{{ asset('storage/img/giulio-contact.png') }}" alt="Foto de Giulio Sousa" class="contact__banner-image">
                    <h2>Acesse as Redes:</h2>
                    <div class="contact__banner-items">
                        <figure class="contact__banner-item">
                            <a href="https://www.linkedin.com/in/giulivan-sousa/" aria-label="Link para o perfil de Giulio Sousa no LinkedIn">
                                <img src="{{ asset('storage/img/linkedin-icon.png') }}" alt="Logo do LinkedIn">
                            </a>
                            <figcaption>LinkedIn</figcaption>
                        </figure>
                        <figure class="contact__banner-item">
                            <a href="https://github.com/giuliosousa" aria-label="Link para o perfil de Giulio Sousa no GitHub">
                                <img src="{{ asset('storage/img/github-icon.png') }}" alt="Logo do GitHub">
                            </a>
                            <figcaption>GitHub</figcaption>
                        </figure>
                    </div>
                </div>
            </div>
            <div class="contact__separator"></div>
            <form action="{{ route('mail.send') }}" method="post">
                @csrf
                <h2>Ou mande uma mensagem por e-mail:</h2>
                <label for="name" class="form__label">Nome:</label>
                <input type="text" name="name" required>
                @error('name')
                    <div class="form__alert">
                        {{ $message }}
                    </div>
                @enderror
                <label for="email" class="form__label">E-mail:</label>
                <input type="text" name="email" required>
                @error('email')
                    <div class="form__alert">
                        {{ $message }}
                    </div>
                @enderror
                <label for="subject" class="form__label">Assunto:</label>
                <input type="text" name="subject" required>
                @error('subject')
                    <div class="form__alert">
                        {{ $message }}
                    </div>
                @enderror
                <label for="message" class="form__label">Mensagem:</label>
                <textarea name="message" cols="30" rows="10"></textarea>
                @error('message')
                    <div class="form__alert">
                        {{ $message }}
                    </div>
                @enderror
                <input type="submit" value="Enviar" class="form__btn-submit">
            </form>
        </section>
    </main>
</x-layout>