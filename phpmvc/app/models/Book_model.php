<?php

class Book_model {
     private $table = 'books';
     private $db;

     public function __construct()
     {
          $this->db = new Database;
     }

     public function getAllBook()
     {
          $this->db->query('SELECT * FROM ' . $this->table);
          return $this->db->resultSet();
     }

     public function getBookById($id)
     {
          $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id = :id');
          $this->db->bind('id', $id);
          return $this->db->single();
     }

     public function createDataBook($data, $image)
     {
          $query = "INSERT INTO $this->table VALUES
                    ('', :title, :writer, :publication_year, :total_pages, :images)
                    ";

          $this->db->query($query);
          $this->db->bind('title', $data['title']);
          $this->db->bind('writer', $data['writer']);
          $this->db->bind('publication_year', $data['publication-year']);
          $this->db->bind('total_pages', $data['total-pages']);
          $this->db->bind('images', $image);

          $this->db->execute();

          return $this->db->rowCount();
     }

     public function deleteDataBook($id)
     {
          $query = "DELETE FROM $this->table WHERE id = :id";

          $this->db->query($query);
          $this->db->bind('id', $id);

          $this->db->execute();

          return $this->db->rowCount();
     }

     public function updateDataBook($data, $image)
     {
          $query = "UPDATE $this->table SET
                    title = :title,
                    writer = :writer,
                    publication_year = :publication_year,
                    total_pages = :total_pages,
                    images = :images WHERE id = :id
               ";

          $this->db->query($query);
          $this->db->bind('id', $data['id']);
          $this->db->bind('title', $data['title']);
          $this->db->bind('writer', $data['writer']);
          $this->db->bind('publication_year', $data['publication-year']);
          $this->db->bind('total_pages', $data['total-pages']);
          $this->db->bind('images', $image);

          $this->db->execute();

          return $this->db->rowCount();
     }

     public function searchDataBook()
     {
          $keyword = $_POST['keyword'];
          $query = "SELECT * FROM $this->table WHERE title LIKE :keyword";

          $this->db->query($query);
          $this->db->bind('keyword', "%$keyword%");

          return $this->db->resultSet();
     }

}