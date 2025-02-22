<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Profil Warga</title>
        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
            integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
            crossorigin="anonymous"
        />
        <script
            src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"
        ></script>
        <script
            src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"
        ></script>
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"
        ></script>
    </head>
    <body>
    <div class="container">
        <a href="/history" class="btn btn-primary mt-5">Kembali</a>
        <p class="h5 mt-3" style="font-size: 35px">Pengaduan Warga</p>
        <form action="/pengaduan" method="POST" enctype="multipart/form-data">
            @csrf
        <input type="hidden" class="form-control" value="{{ request()->route('idBansos') }}" name="idbansos">
            <div>
                <div>
                    <label for="pengaduan" class="form-label">Deskripsi Pengaduan</label>
                    <textarea class="form-control" id="pengaduan" rows="4" name="pengaduan"> </textarea>
                </div>
            </div>
            <div class="mt-2">
                <label for="pengaduangambar" class="form-label">Gambar Pendukung</label>
                <input type="file" class="form-control" id="pengaduangambar" name="pengaduangambar">
            </div>
            <div class="mt-3">
                <div class="d-grid gap-2 d-md-block">
                    <button type="submit" class="btn btn-success btn-sm">Submit</button>
                </div>
            </div>
        </form>
    </div>
    </body>