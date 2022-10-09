<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Catatan Baru</title>
</head>
<body style="display:flex; justify-content: center;">
<div>
    <h1 style="margin-top: 200px;">Tambah Catatan</h1>
    <form method="POST" action="{{route('create-note')}}" style="width: 480px;">
        @csrf
        <div class="input-field" style="display:flex; flex-direction: column;">
            <label for="title">Judul Catatan</label>
            <input type="text" name="title" id="title">
        </div>
        <div class="input-field" style="display:flex; flex-direction: column;">
            <label for="notes">Isi Catatan</label>
            <textarea name="notes" id="notes" cols="30" rows="10"></textarea>
        </div>
        <button type="submit">Add to Notes</button>
    </form>
</div>
</body>
</html>