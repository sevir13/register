<div class="block_registration__container">
    <div class="row">
        <div class="col-sm-6">
            <h3 class="text-center">Регистрация</h3>
            <form action="" method="POST" class="reg-form " id="regForm" autocomplete="off">
                <div class="form-group">
                    <label for="regInputName">Имя</label>
                    <input type="text" name="name" class="form-control" id="regInputName">
                    <div class="invalid-feedback"></div>
                </div>
                <div class="form-group">
                    <label for="regInputFamily">Фамилия</label>
                    <input type="text" name="family" class="form-control" id="regInputFamily">
                    <div class="invalid-feedback"></div>
                </div>
                <div class="form-group">
                    <label for="regInputEmail">Email</label>
                    <input type="text" name="email" class="form-control" id="regInputEmail">
                    <div class="invalid-feedback"></div>
                </div>
                <div class="form-group">
                    <label for="regInputPhone">Телефон</label>
                    <input type="tel" name="phone" class="form-control" id="regInputPhone">
                    <div class="invalid-feedback"></div>
                </div>
                <div class="form-group">
                    <label for="regInputAddress">Адрес</label>
                    <input type="text" name="address" class="form-control" id="regInputAddress">
                    <div class="invalid-feedback"></div>
                </div>
                <div class="form-group">
                    <label for="regInputPassword">Пароль</label>
                    <input type="password" name="password" class="form-control" id="regInputPassword">
                    <div class="invalid-feedback"></div>
                </div>
                <div class="form-group">
                    <label for="regInputConfirmPassword">Подтвердить пароль</label>
                    <input type="password" name="confirm_password" class="form-control" id="regInputConfirmPassword">
                    <div class="invalid-feedback"></div>
                </div>
                <button type="submit" class="btn btn-primary">Отправить</button>
            </form>
        </div>
        <div class="col-sm-6">
            <h3 class="text-center">Авторизация</h3>
            <form action="" method="POST" class="auth-form" id="authForm">
                <div class="form-group">
                    <label for="authInputEmail">Email</label>
                    <input type="email" class="form-control" id="authInputEmail">
                </div>
                <div class="form-group">
                    <label for="authInputPassword">Пароль</label>
                    <input type="password" class="form-control" id="authInputPassword">
                </div>
                <button type="submit" class="btn btn-primary">Войти</button>
            </form>
        </div>
    </div>

</div>
