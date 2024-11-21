<?php

class Book extends Controller {
    public function index()
    {
        $data['title'] = 'Book/index';
        $data['book'] = $this->model('Book_model')->getAllBook();
        $this->view('templates/header', $data);
        $this->view('book/index', $data);
        $this->view('templates/footer'); 
    }

    public function detail($id)
    {
        $data['title'] = 'Book/detail';
        $data['book'] = $this->model('Book_model')->getBookById($id);
        $this->view('templates/header', $data);
        $this->view('book/detail', $data);
        $this->view('templates/footer'); 
    }

    public function create()
    {
        // Upload gambar
        $image = $this->upload();

        if ( !$image ) {
            return false;
        }
        
        if ( $this->model('Book_model')->createDataBook($_POST, $image) > 0 ) {
            Flasher::setFlash('Berhasil', 'Ditambahkan', 'primary');
            header('Location: ' . BASEURL . '/book');
            exit;
        } else {
            Flasher::setFlash('Gagal', 'Ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/book');
            exit;
        }
    }

    public function delete($id)
    {
        if ( $this->model('Book_model')->deleteDataBook($id) > 0 ) {
            Flasher::setFlash('Berhasil', 'Dihapus', 'primary');
            header('Location: ' . BASEURL . '/book');
            exit;
        } else {
            Flasher::setFlash('Gagal', 'Dihapus', 'danger');
            header('Location: ' . BASEURL . '/book');
            exit;
        }
    }

    public function update()
    {
        // Upload gambar
        if ( $_FILES['image']['error'] === 4 ) {
            $image = $_POST['oldImage'];
        } else {
            $image = $this->upload();
        }

        if ( $this->model('Book_model')->updateDataBook($_POST, $image) > 0 ) {
            Flasher::setFlash('Berhasil', 'Diubah', 'primary');
            header('Location: ' . BASEURL . '/book');
            exit;
        } else {
            Flasher::setFlash('Gagal', 'Diubah', 'danger');
            header('Location: ' . BASEURL . '/book');
            exit;
        }
    }

    public function getUpdate()
    {
        echo json_encode($this->model('Book_model')->getBookById($_POST['id']));
    }

    public function search()
    {
        $data['title'] = 'Book/index';
        $data['book'] = $this->model('Book_model')->searchDataBook();
        $this->view('templates/header', $data);
        $this->view('book/index', $data);
        $this->view('templates/footer');
    }

    public function upload() {

        $name_file = $_FILES["image"]["name"];
        $size_file = $_FILES["image"]["size"];
        $error = $_FILES["image"]["error"];
        $tmp_name = $_FILES["image"]["tmp_name"];
    
        // Cek apakah gambar sudah diupload
        // if ( $error === 4 ) {
        //     echo "
        //     <script>
        //         alert('pilih gambar terlebih dahulu');
        //     </script>
        // ";
        // return false;
        // }
    
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
        if ( $size_file > 5000000 ) {
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

}

