<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Список гостей</title>
    <link rel="stylesheet" href="/assets/bootstrap/css/ListBootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">
    <link rel="stylesheet" href="/assets/css/ListStyles.min.css">
</head>
<body>
<div style="margin-top: 25px;">
    <div class="container">
        <div class="row">
            <div class="col-md-4"><h2 style="width: 343px;">Список гостей</h2></div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table id="table" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th>Фамилия Имя</th>
                        <th>Возраст</th>
                        <th>Дата принятия приглашения</th>
                        <th>Удалить гостя</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($guests as $guest)
                        <tr id="guest_{{ $guest["id"] }}">
                            <td>{{ $guest['name'] }}</td>
                            <td>
                                @if($guest['type'] == 'adult')
                                    Взрослый
                                @endif
                                @if($guest['type'] == 'child')
                                    Ребенок
                                @endif
                            </td>
                            <td>{{ $guest['created_at'] }}</td>
                            <td>
                                <button type="button" class="btn btn-danger delete-btn" id="{{ $guest["id"] }}">
                                    <i class="far fa-trash-alt d-xl-flex justify-content-xl-center align-items-xl-center"></i>
                                </button>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<script
    src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
    crossorigin="anonymous"></script>
<script type="text/javascript">
    $('.delete-btn').on('click', function () {
        let sendData = new Map([
            ['id', $(this).attr('id')]
        ]);
        $.ajax({
            type: "POST",
            url: "{{ env('APP_URL') }}/api/deleteGuest",
            data: sendData,
            success: function (success) {
                $(this).remove();
            }
        });
    })
</script>
</body>
</html>
