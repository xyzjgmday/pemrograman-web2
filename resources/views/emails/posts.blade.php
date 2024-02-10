<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Postingan Baru</title>
</head>

<body>
    <h4>Hai, {{ $name }}</h4>
    <p>Ada postingan baru dengan judul : <strong>{{ $title }}</strong></p>
    <form action="{{ route('send.email') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="subject">Subject</label>
            <input type="text" class="form-control" id="subject" name="subject" required>
        </div>
        <div class="form-group">
            <label for="message">Message</label>
            <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
        </div>
        <div class="form-group">
            <label for="recipient">Recipient Email</label>
            <input type="email" class="form-control" id="recipient" name="recipient" required>
        </div>
        <button type="submit" class="btn btn-primary">Send Email</button>
    </form>

</body>

</html>