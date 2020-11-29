<h2><?= esc($title); ?></h2>

<?= \Config\Services::validation()->listErrors(); ?>

<form action="/users/create" method="post">
    <?= csrf_field() ?>

    <label for="firstname">Imie</label>
    <input type="input" name="firstname" /><br />

    <label for="lastname">Nazwisko</label>
    <input type="input" name="lastname" /><br />

    <label for="pesel">Pesel</label>
    <input type="input" name="pesel" /><br />

    <label for="phone">Numer telefonu</label>
    <input type="input" name="phone" /><br />

    <label for="email">Email</label>
    <input type="input" name="email" /><br />

    <label for="role">Rola</label>
    <input type="input" name="role" /><br />

    <input type="submit" name="submit" value="Create user item" />
</form>