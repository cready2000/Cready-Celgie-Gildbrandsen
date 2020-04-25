<?php
include('koneksi_tugas.php');
require_once("dompdf_0-8-3/dompdf/autoload.inc.php");
use Dompdf\Dompdf;
$dompdf = new Dompdf();
$query = mysqli_query($conn,"SELECT * FROM formvalidasi");
$html = '<center><h3>Daftar Form Validasi</h3></center><hr/><br/>';
$html .= '<table border="1" width="100%">
 <tr>
 <th>No</th>
 <th>Tanggal Input</th>
 <th>Nama Lengkap</th>
 <th>Jenis Kelamin</th>
 <th>NISN</th>
 <th>NIK / No. Kitas</th>
 <th>Tempat Lahir</th>
 <th>Tanggal Lahir</th>
 <th>No. Registrasi Akta Lahir</th>
 <th>Agama & Kepercayaan</th>
 <th>Kewarganegaraan</th>
 <th>Berkebutuhan Khusus</th>
 <th>Alamat Jalan</th>
 <th>RT</th>
 <th>RW</th>
 <th>Nama Dusun</th>
 <th>Nama Kelurahan / Desa</th>
 <th>Kecamatan</th>
 <th>Kode Pos</th>
 <th>Lintang</th>
 <th>Bujur</th>
 <th>Tempat Tinggal</th>
 <th>Moda Transportasi</th>
 <th>Nomor KKS</th>
 <th>Anak ke-berapa</th>
 <th>Penerima KPS/KPH</th>
 <th>No. KPS / KPH</th>
 </tr>';
$no = 1;
while($row = mysqli_fetch_array($query))
{
 $html .= "<tr>
 <td>".$no."</td>
 <td>".$row['tgl']."</td>
 <td>".$row['nama']."</td>
 <td>".$row['jk']."</td>
 <td>".$row['nisn']."</td>
 <td>".$row['nik']."</td>
 <td>".$row['tempat']."</td>
 <td>".$row['tgllahir']."</td>
 <td>".$row['akta']."</td>
 <td>".$row['agama']."</td>
 <td>".$row['kwn']."</td>
 <td>".$row['bk']."</td>
 <td>".$row['alamat']."</td>
 <td>".$row['rt']."</td>
 <td>".$row['rw']."</td>
 <td>".$row['dusun']."</td>
 <td>".$row['kelurahan']."</td>
 <td>".$row['kecamatan']."</td>
 <td>".$row['kodepos']."</td>
 <td>".$row['lintang']."</td>
 <td>".$row['bujur']."</td>
 <td>".$row['ttinggal']."</td>
 <td>".$row['transportasi']."</td>
 <td>".$row['kks']."</td>
 <td>".$row['anak']."</td>
 <td>".$row['kps']."</td>
 <td>".$row['nokps']."</td>
 </tr>";
 $no++;
}
$html .= "</html>";
$dompdf->loadHtml($html);
// Setting ukuran dan orientasi kertas
$dompdf->setPaper('B0', 'landscape');
// Rendering dari HTML Ke PDF
$dompdf->render();
// Melakukan output file Pdf
$dompdf->stream('laporan_formvalidasi.pdf');
?>