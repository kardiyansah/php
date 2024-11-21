<?php 
// Koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");


function query($SQL_syntax) {
    global $conn;
    $result = mysqli_query($conn, $SQL_syntax);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}


function create($data) {
    // $data berasal dari variabel global $_POST
    global $conn;
    // Ambil / query data dari $_POST
    $book_title = htmlspecialchars($data["book-title"]);
    $writer = htmlspecialchars($data["writer"]);
    $publication_year = htmlspecialchars($data["publication-year"]);
    $total_pages = htmlspecialchars($data["total-pages"]);
    
    // Upload gambar
    $image = upload();

    if ( !$image ) {
        return false;
    }

    // masukan / insert data kedalam tabel didatabase phpdasar
    $SQL_syntax = "INSERT INTO books VALUES 
                    ('', '$book_title', '$writer', '$publication_year', '$total_pages', '$image')
                ";
    mysqli_query($conn, $SQL_syntax);

    return mysqli_affected_rows($conn);
}


function upload() {

    $name_file = $_FILES["image"]["name"];
    $size_file = $_FILES["image"]["size"];
    $error = $_FILES["image"]["error"];
    $tmp_name = $_FILES["image"]["tmp_name"];

    // Cek apakah gambar sudah diupload
    if ( $error === 4 ) {
        echo "
        <script>
            alert('pilih gambar terlebih dahulu');
        </script>
    ";
    return false;
    } 

    // Cek apakah file yang diupload adalah gamabar
    $extension_images = ['jpg', 'jpeg', 'png'];
    $extension = explode('.', $name_file);
    $extension = strtolower(end($extension));
    if ( !in_array($extension, $extension_images) ) {
        echo "
        <script>
            alert('yang anda upload bukan gambar');
        </script>
    ";
    }
    
    // Cek batas ukuran gambar
    if ( $size_file > 1000000 ) {
        echo "
        <script>
            alert('ukuran gambar terlalu besar');
        </script>
    ";
    }

    // upload gambar
    // Generate nama gambar baru
    $new_name = uniqid();
    $new_name .= '.';
    $new_name .= $extension;

    move_uploaded_file($tmp_name, 'img/' . $new_name);

    return $new_name;

}


function delete($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM books WHERE id = $id");
    
    return mysqli_affected_rows($conn);
}


function update($data) {
    // $data berasal dari variabel global $_POST
    global $conn;
    
    // Ambil / query data dari $_POST
    $id = $data["id"];
    $book_title = htmlspecialchars($data["book-title"]);
    $writer = htmlspecialchars($data["writer"]);
    $publication_year = htmlspecialchars($data["publication-year"]);
    $total_pages = htmlspecialchars($data["total-pages"]);
    $old_image = $data["old-image"];

    // Cek apakah user memilih gambar baru atau tidak
    if ( $_FILES["image"]["error"] === 4 ) {
        $image = $old_image;
    } else {
        $image = upload();
    }

    // masukan / insert data kedalam tabel didatabase phpdasar
    $SQL = "UPDATE books SET
                    book_title = '$book_title',
                    writer = '$writer',
                    publication_year = '$publication_year',
                    total_pages = '$total_pages',
                    images = '$image'
                    WHERE id = $id
                ";
    
    mysqli_query($conn, $SQL);

    return mysqli_affected_rows($conn);
} 


function search($search) {
    $SQL = "SELECT * FROM books WHERE 
            book_title LIKE '%$search%' OR
            writer LIKE '%$search%' OR
            publication_year LIKE '%$search%' OR
            total_pages LIKE '%$search%'
        ";

    return query($SQL);
}


function registration($data) {
    // $data diambil dari variable global $_POST

    global $conn;

    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password_confirmation = mysqli_real_escape_string($conn, $data["password-confirmation"]); 

    // Cek username sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM users WHERE username = '$username'");
    if ( mysqli_fetch_assoc($result) ) {
        echo "
            <script>
                alert('Username sudah ada, tolong masukan nama lain');
            </script>
        ";
        return false;
    }

    // konfirmasi password
    if ( $password !== $password_confirmation ) {
        echo "
            <script>
                alert('Konfirmasi password tidak sesuai');
            </script>
        ";
        return false;
    }

    // Enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // Tambahkan userbaru kedatabase
    mysqli_query($conn, "INSERT INTO users VALUES(
                '', '$username', '$password'
            )");

    return mysqli_affected_rows($conn);    

}






?>
    


