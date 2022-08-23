

<?php
   include "C://xampp/htdocs/erpify/config.php";
  

   

    class factureC {

        public function ajouterFacture($facture)
        {
            $sql = "INSERT INTO facture (name, phone, address, campany, phonec, addressc, referance, date, clientn) 
            VALUES (:name, :phone, :address,  :campany, :phonec, :addressc, :referance, :date, :clientn)";
    
            $db = config::getConnexion();
            try {
                $query = $db->prepare($sql);
    
                $query->execute([
                    'name' => $facture->getName(),
                    'phone' => $facture->getPhone(),
                    'address' => $facture->getAddress(),
                    'campany' => $facture->getCampany(),
                    'phonec' => $facture->getPhonec(),
                    'addressc' => $facture->getAddressc(),
                    'referance' => $facture->getReferance(),
                    'date' => $facture->getDate(),
                    'clientn' => $facture->getClientn()
    
                ]);
            } catch (Exception $e) {
                echo 'Erreur: ' . $e->getMessage();
            }
        }

   

        


        public function afficherFacture()
        {
    
            $sql = "SELECT * FROM facture ORDER BY  id DESC LIMIT 1";
            $db = config::getConnexion();
            try {
                $liste = $db->query($sql);
                return $liste;
            } catch (Exception $e) {
                die('Erreur: ' . $e->getMessage());
            }
        }

      

    
    }