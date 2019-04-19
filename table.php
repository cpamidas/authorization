<div class="tmaxwidth">
    <table class="table table-bordered table-hover table-sm">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Ключ</th>
            <th scope="col">Значение</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">1</th>
            <td>IP-сервера</td>
            <td><?=$_SERVER['SERVER_ADDR']?></td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>Домен</td>
            <td><?=$_SERVER['SERVER_NAME']?></td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td>Софт</td>
            <td><?=$_SERVER['SERVER_SOFTWARE']?></td>
        </tr>
        <tr>
            <th scope="row">4</th>
            <td>Директория скрипта</td>
            <td><?=$_SERVER['DOCUMENT_ROOT']?></td>
        </tr>
        <tr>
            <th scope="row">5</th>
            <td>Encoding</td>
            <td><?=$_SERVER['HTTP_ACCEPT_ENCODING']?></td>
        </tr>
        <tr>
            <th scope="row">6</th>
            <td>Реферрер</td>
            <td><?=$_SERVER['HTTP_REFERER']?></td>
        </tr>
        <tr>
            <th scope="row">7</th>
            <td>IP пользователя</td>
            <td><?=$_SERVER['REMOTE_ADDR']?></td>
        </tr>

        </tbody>
    </table>
</div>

<hr class="marg">