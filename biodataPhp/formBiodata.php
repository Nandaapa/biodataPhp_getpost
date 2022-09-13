<html>

<head>
    <title>Form Input Biodata PHP</title>
   <style>
  input[type=text] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
select{
    width: 100%;
  padding: 16px 20px;
  border: none;
  border-radius: 4px;
  background-color: white;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #95d0f5;
  padding: 20px;
}
</style>
</head>
<body>
        <form action="tampil.php" method="POST">
            <div>
                <label>Nama :</label> <br>
                <input name="nama" type="text" placeholder="Your name..">
            </div>
            <div>
                <label>Jenis Kelamin :</label> <br>                
                <input name="jenis_kelamin" value="Laki-laki" type="radio">Laki-laki<br>
                <input name="jenis_kelamin" value="Perempuan" type="radio">Perempuan
            </div>
            <div>
                <label>Agama :</label>
            <select class="agama" name="agama">
  <option value="Islam">Islam</option>
  <option value="Kristen">Kristen</option>
  <option value="Katolik">Katolik</option>
  <option value="Hindu">Hindu</option>
  <option value="Budha">Budha</option>
  </select>
            </div>
            <div>
                <label>Alamat :</label> <br>
                <input name="alamat" type="text"
                placeholder="Your Address..">
            </div>
            <div>
                <label>Tempat Tanggal Lahir :</label> <br>
                <input name="ttl" type="text"
                placeholder="Your place and date..">
            </div>
            <div>
                <label>Hobi :</label> <br>
                <input name="hobi" type="text"
                placeholder="Your Hobby..">
            </div>
            <div>
                <label>Cita-cita :</label> <br>
                <input name="citacita" type="text"
                placeholder="Your dream..">
            </div>
            <div>
                <label>Usia :</label> <br>
                <input name="usia" type="text"
                placeholder="Your age..">
            </div>
            <div>
                <label>Asal Sekolah :</label> <br>
                <input name="asalSekolah" type="text"
                placeholder="Your school..">
            </div>
            <div>
                <input type="submit" value="Simpan">
            </div>
        </form>
</body>
</html>