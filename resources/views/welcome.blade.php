<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>for</title>
</head>
<body>
    <button type="submit" class="click_me">click me</button>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://js.pusher.com/7.0/pusher.min.js"></script>
    <script>
      Pusher.logToConsole = true;
      var pusher = new Pusher('7a783e2d8aa18dbc528e', {
        cluster: 'eu'
      });
        var channel = pusher.subscribe('short');
        channel.bind('App\\Events\\see_comment', function(data) {
            alert(data.id+data.name);
        });
            $('.click_me').click(function (e) {
                e.preventDefault();
                    $.ajax({
                        type: "post",
                        url: "{{ route('test_pusher') }}",
                        data:{'_token':'{{ csrf_token() }}'}
                    });
            });
        </script>
</body>
</html>
