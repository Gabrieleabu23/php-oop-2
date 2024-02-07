<?php

    class Product {
        use DiscountTrait;
        private $id;

        private $title;
        private $image;
        private $originalPrice;
        
        private $category;

        public function __construct(
            $id, $title, $image, $originalPrice,
            Category $category
        ) {

            $this -> setId($id);
            
            $this -> setTitle($title);
            $this -> setImage($image);
            $this -> setPrice($originalPrice);
            
            $this -> setCategory($category);
        }

        public function getId() {

            return $this -> id;
        }
        public function setId($id) {

            $this -> id = $id;
        }

        public function getTitle() {

            return $this -> title;
        }
        public function setTitle($title) {

            $this -> title = $title;
        }

        public function getImage() {

            return $this -> image;
        }
        public function setImage($image) {

            $this -> image = $image;
        }

        public function getPrice() {

            return $this -> originalPrice;
        }
        public function setPrice($originalPrice) {

            $this -> originalPrice = $originalPrice;
        }

        public function getCategory() {

            return $this -> category;
        }
        public function setCategory(Category $category) {

            $this -> category = $category;
        }
        public function getOriginalPrice() {
            return $this->originalPrice;
        }
    
        public function setOriginalPrice($originalPrice) {
            $this->originalPrice = $originalPrice;
        }
    }
    trait DiscountTrait {
        private $discountPercentage = 0;
    
        public function setDiscountPercentage($percentage) {
            $this->discountPercentage = $percentage;
        }
    
        public function applyDiscount($price) {
            if ($this->discountPercentage < 0 || $this->discountPercentage > 100) {
                throw new Exception("Sconto non valido!");
            }
    
            $discountAmount = ($this->discountPercentage / 100) * $price;
            $discountedPrice = $price - $discountAmount;

    
            return $discountedPrice;
        }
    }