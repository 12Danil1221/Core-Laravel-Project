<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вход</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>

<body>
    <a class="btn" href="{{ route('welcome') }}">Назад</a>
    <div style="display:flex; justify-content:center;">
        <div class="form"
            style="text-align: center; border: 1px solid; background-color: #3b82f6; border-radius: 1rem; width: 25%; padding: 2rem 0rem;">
            <h1>Вход</h1>
            <form id="login-form" action="{{ route('login') }}">
                @csrf
                <div class="mb-3">
                    <label class="form-label" for="email">Email</label>
                    <input class="form-controle" type="email" name="email" id="email" required>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="password">Пароль</label>
                    <input class="form-controle" type="password" name="password" id="password" required>
                </div>
                <p>Если вы ещё не зарегестрированы<a href="{{ route('register_view') }}"> Переходи сюда!</a></p>
                <button type="submit" class="btn btn-success">Войти</button>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script>
    $(document).ready(function() {

        $('#login-form').submit(function(e) {
            e.preventDefault();
            $.ajax({
                type: 'POST',
                url: '/api/login',
                data: $(this).serialize(),
                success: function(data) {
                    console.log(data);
                    localStorage.setItem('token', data.token);
                    window.location.href = 'http://127.0.0.1:8000/fitnes-livewire';
                },
                error: function(xhr, status, error) {
                    console.log(xhr.responseText);
                }
            });
        });
    });
    </script>
</body>

</html>