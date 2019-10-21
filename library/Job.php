<?php

    class Job {
        private $db;
        
        public function __construct() {
            $this->db = new Database;
        }

        //Get All jobs
        public function getAllJobs() {
            $this->db->query("SELECT jobs.*, categories.name AS cat_name
                              FROM jobs 
                              INNER JOIN categories
                              ON jobs.category_id = categories.id
                              ORDER BY post_date DESC      
                            "); //Join jobs field and categories table
            //Assign results
            $results = $this->db->resultSet();
            
            return $results;
        }

        public function getCategories() {
            $this->db->query("SELECT * FROM categories");
            //Assign results
            $results = $this->db->resultSet();

            return $results;
        }
        //Fetch all category in the select button
        public function getByCategory($category) {
            $this->db->query("SELECT jobs.*, categories.name AS cat_name
                              FROM jobs 
                              INNER JOIN categories
                              ON jobs.category_id = categories.id
                              WHERE jobs.category_id = $category
                              ORDER BY post_date DESC      
                            "); //Join jobs field and categories table
            //Assign results
            $results = $this->db->resultSet();

            return $results;
        }

        //Get Category name
         public function getCategory($category_id) {
                $this->db->query("SELECT * FROM categories WHERE id = :category_id");
                $this->db->bind(':category_id',$category_id);
                //Assign row
                $row = $this->db->single();

            return $row;
         }
         
         public function getJob($id) {
                $this->db->query("SELECT * FROM jobs WHERE id = :id");
                $this->db->bind(":id",$id);
                //Assign row
                $row = $this->db->single();

            return $row;
         }
        
    }






?>