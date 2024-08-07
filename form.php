<section class="reservation" id="reservation">

      <h1 class="heading">Pesan Sekarang</h1>
    
      <form action="" method="POST">
    
        <div class="container">
    
          <div class="box">
            <p>Nama Pemesan <span>*</span></p>
            <input type="text" class="input" placeholder="Nama Pemesan" name="nama_pemesan" required>
          </div>
    
          <div class="box">
            <p>Nomor Identitas<span>*</span></p>
            <input type="text" class="input" placeholder="Nomor Identitas" name="nomor_identitas" id="nomorIdentitas" required>
            <span id="identitasError" class="error-message"></span>
          </div>
            
          <div class="box">
            <p>Jenis Kelamin <span>*</span></p>
            <select name="jenis_kelamin" class="input" required>
              <option value="laki-laki">Laki-laki</option>
              <option value="perempuan">Perempuan</option>
            </select>
          </div>

          <div class="box">
            <p>Tipe Kamar <span>*</span></p>
            <select name="tipe_kamar" class="input" id="tipeKamar" required>
              <option value="standar">Standar</option>
              <option value="deluxe">Deluxe</option>
              <option value="family">Family</option>
            </select>
          </div>
    
          <div class="box">
            <p>Harga <span>*</span></p>
            <input type="text" class="input" id="hargaKamar" name="harga" readonly>
          </div>
    
          <div class="box">
            <p>Tanggal Pesan <span>*</span></p>
            <input type="date" class="input" placeholder="dd/mm/yyyy" name="tgl_pesan" required>
          </div>
    
          <div class="box">
            <p>Durasi Menginap <span>*</span></p>
            <input type="text" class="input" placeholder="Durasi Menginap" id="durasiMenginap" name="durasi_menginap" required>
            <span id="durasiError" class="error-message"></span>
          </div>
    
          <div class="box">
            <p>Termasuk Breakfast <span>*</span></p>
            <input type="checkbox" id="breakfast" class="input">
          </div>
    
          <div class="box">
            <p>Total Bayar <span>*</span></p>
            <input type="text" class="input" id="totalBayar" name="total_bayar" readonly>
          </div>
    
          <input type="hidden" id="discount" name="discount">
    
        </div>
    
        <input type="button" value="Hitung Total Bayar" class="btn" onclick="hitungTotalBayar()">
        <input type="submit" value="Submit" name="submit" class="btn">
        <input type="button" value="Cancel" class="btn" onclick="window.location.href='#home'">
    
      </form>
    
      <script>
        document.getElementById('tipeKamar').addEventListener('change', function() {
          const hargaKamar = {
            standar: 500000,
            deluxe: 800000,
            family: 1000000
          };
          const harga = hargaKamar[this.value];
  document.getElementById('hargaKamar').value = harga;
        });

        document.getElementById('nomorIdentitas').addEventListener('input', function() {
          const identitasError = document.getElementById('identitasError');
          if (this.value.length !== 16 || isNaN(this.value)) {
            identitasError.textContent = 'Isian salah..data harus 16 digit';
          } else {
            identitasError.textContent = '';
          }
        });

        document.getElementById('durasiMenginap').addEventListener('input', function() {
          const durasiError = document.getElementById('durasiError');
          if (isNaN(this.value)) {
            durasiError.textContent = 'Harus isi angka';
          } else {
            durasiError.textContent = '';
          }
        });

        function hitungTotalBayar() {
  const durasi = parseInt(document.getElementById('durasiMenginap').value);
  const harga = parseInt(document.getElementById('hargaKamar').value);
  const breakfast = document.getElementById('breakfast').checked;
  
  if (isNaN(durasi) || isNaN(harga)) {
    document.getElementById('totalBayar').value = 'Invalid input';
    return;
  }

  let total = durasi * harga;

  if (durasi === 3 && breakfast) {
    total = 1590000;
  } else if (durasi > 3) {
    total *= 0.9;
    if (breakfast) {
      total += 80000;
    }
  } else if (breakfast) {
    total += 80000;
  }

  document.getElementById('totalBayar').value = total;
}

      </script>
    
    </section>

    <?php
include "koneksi.php";

if(isset($_POST['submit'])){
    $query = "INSERT INTO reservations 
        (nama_pemesan, nomor_identitas, jenis_kelamin, tipe_kamar, durasi_menginap, discount, total_bayar)
        VALUES 
        ('$_POST[nama_pemesan]', '$_POST[nomor_identitas]', '$_POST[jenis_kelamin]', '$_POST[tipe_kamar]', 
        '$_POST[durasi_menginap]', '$_POST[discount]', '$_POST[total_bayar]')";

if (mysqli_query($koneksi, $query)) {
    echo "<script>alert('Reservasi berhasil!');</script>";
} else {
    echo "<script>alert('Error: " . mysqli_error($koneksi) . "');</script>";
}

}


?>
