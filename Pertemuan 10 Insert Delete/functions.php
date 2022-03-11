<?php
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;

}
function tambah($data){
    global $conn;

    //ambil data dari tiap elemen
    $nrp = htmlspecialchars($data["nrp"]);
    $nama = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);

    $gambar = upload();
    if(!$gambar){
        return false;
    }

    // query insert data
    $query = "INSERT INTO mahasiswa VALUES ('', '$nama', '$nrp', '$email', '$jurusan', '$gambar')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
function upload(){
    $namaFile = $_FILES["gambar"]["name"];
    $error = $_FILES["gambar"]["error"];
    $sizeFile = $_FILES["gambar"]["size"];
    $tmpName = $_FILES["gambar"]["tmp_name"];

    if($error === 4){
        echo "<script>
            alert('Anda belum memasukan gambar');
        </script>";
        return false;
    }

    // Cek apakah yang di upload adalah gambar
    $ekstensiGambar = ["jpg", "jpeg", "png"];
    $ambilEkstensi = explode(".", $namaFile);
    $ambilEkstensi = strtolower(end($ambilEkstensi));

    if( !in_array($ambilEkstensi, $ekstensiGambar)){
        echo "<script>
            alert('Anda bukan memasukan gambar');
        </script>";
        return false;
    }

    // Cek apakah data lebih dari 5mb
    if($sizeFile > 5000000){
        echo "<script>
            alert('Gambar yang anda masukan lebih dari 5MB');
        </script>";
        return false;
    }

    // Ubah nama random supaya tidak tertimpa
    // lalu move dari tmp ke mode upload
    $namaFileBaru = uniqid();
    $namaFileBaru .= ".";
    $namaFileBaru .= $ambilEkstensi;

    move_uploaded_file($tmpName, 'img/'.$namaFileBaru);
    return $namaFileBaru;
}
function hapus($id){
    global $conn;
    mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");

    return mysqli_affected_rows($conn);
}
function ubah($data){
    global $conn;

    //ambil data dari tiap elemen
    $id = $data["id"];
    $nrp = htmlspecialchars($data["nrp"]);
    $nama = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $gambarLama = htmlspecialchars($data["gambarLama"]);

    if($_FILES["gambar"]["error"] === 4){
        $gambar = $gambarLama;
    }else{
        $gambar = upload();
    }
    
    // query insert data
    $query = "UPDATE mahasiswa SET nama = '$nama', nrp = '$nrp', email = '$email', jurusan = '$jurusan', gambar = '$gambar' WHERE id = $id";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
function cari($keyword){
    $query = "SELECT * FROM mahasiswa WHERE nama LIKE '%$keyword%' OR nrp LIKE '%$keyword%' OR email LIKE '%$keyword%' OR jurusan LIKE '%$keyword%' ";

    return query($query);
}
function registrasi($data){
    global $conn;

    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);

    $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");
    if(mysqli_fetch_assoc($result)){
        echo "<script>
            alert('Username sudah di gunakan');
        </script>";
        return false;
    }

    if($password !== $password2){
        echo "<script>
            alert('Password yang anda masukan tidak sama');
        </script>";
        return false;
    }

    $password = password_hash($password, PASSWORD_DEFAULT);

    mysqli_query($conn, "INSERT INTO user VALUES('', '$username', '$password')");

    return mysqli_affected_rows($conn);
}
?>
