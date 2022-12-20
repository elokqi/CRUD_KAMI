<!DOCTYPE html>
<html>
<head>
    <title>Formulir Pendaftaran Siswa Baru | SMK Coding</title>
</head>

<body>
    <header class="bg-primary py-5">
        <div class="container">
            <h1 class="display-4 text-white text-center">Pendaftaran Siswa Baru</h1>
        </div>
    </header>

    <form action="proses-pendaftaran.php" method="POST">
        <fieldset>
            
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" name="nama" placeholder="nama lengkap">
        </div>

        <p>
        <div class="form-group">
            <label for="alamat">Alamat </label>
            <textarea name="alamat"></textarea>
        </div>
        </p>

        <p>
        <div class="form-group">
            <label for="jenis_kelamin">Jenis Kelamin: </label>
            <label><input type="radio" name="jenis_kelamin" value="laki-laki"> Laki-laki</label>
            <label><input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan</label>
        </div>
        </p>
        <p>
        <div class="form-group">
            <label for="agama">Agama: </label>
            <select name="agama">
                <option>Islam</option>
                <option>Kristen</option>
                <option>Hindu</option>
                <option>Budha</option>
                <option>Atheis</option>
            </select>
        </div>
        </p>
        <p>
        <div class="form-group">
            <label for="sekolah_asal">Sekolah Asal: </label>
            <input type="text" name="sekolah_asal" placeholder="nama sekolah" />
        </p>
        </div>
        <p>
        <button type="button" class="btn btn-success">Daftar</button>
        </p>

        </fieldset>

    </form>

    </body>
</html>