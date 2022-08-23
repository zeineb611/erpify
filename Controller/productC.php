<?php
    include "C://xampp/htdocs/erpify/config.php";

   

    class productC {

        public function ajouterProduct($product)
        {
            $sql = "INSERT INTO product (description, unit, quantity, referancep) 
            VALUES (:description, :unit, :quantity, :referancep)";
    
            $db = config::getConnexion();
            try {
                $query = $db->prepare($sql);
    
                $query->execute([
                    'description' => $product->getDescription(),
                    'unit' => $product->getUnit(),
                    'quantity' => $product->getQuantity(),
                    'referancep' => $product->getReferancep()
                  
                    
    
                ]);
            } catch (Exception $e) {
                echo 'Erreur: ' . $e->getMessage();
            }
        }

   

        


        public function afficherProduct()
        {
    
            $sql = "SELECT description ,unit ,quantity , quantity*unit as amount  FROM product WHERE referancep =( SELECT referance FROM facture ORDER BY  id DESC LIMIT 1)" ;
            $db = config::getConnexion();
            try {
                $liste = $db->query($sql);
                return $liste;
            } catch (Exception $e) {
                die('Erreur: ' . $e->getMessage());
            }
        }


        public function affichertotal()
        {
    
            $sql = "SELECT SUM(unit*quantity) AS amount FROM product WHERE referancep =( SELECT referance FROM facture ORDER BY  id DESC LIMIT 1) ";
            $db = config::getConnexion();
            try {
                $liste = $db->query($sql);
                return $liste;
            } catch (Exception $e) {
                die('Erreur: ' . $e->getMessage());
            }
        }
      
       

    
    }