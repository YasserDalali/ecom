<?php
include "connection.php";
class Controller extends Connection {
    private $c;

    public function __construct() {
        $this->c = new Connection();
    }

    public function showProducts() {
        $r = $this->c->pdo->query("SELECT * FROM products");
        while ($row = $r->fetch(PDO::FETCH_ASSOC))
        {
            echo '    <div class="col-md mb-4">
<a href="product_info.php?name='.urlencode($row['name']).'" style="text-decoration:none; color: black"><div class="card" style="width: 18rem;">
            <img src="' . $row['image_url'] . '" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">' . $row['name'] . '</h5>
                <p class="card-text">' . $row['description'] . '</p>
                <p class="card-text">$' . $row['price'] . '</p>
            </div>
        </div></a></div>';        
        }
    }
    public function collectProductData($pName) {
        $stmt = $this->c->pdo->prepare("SELECT * FROM products WHERE name = :name");
        $stmt->execute(['name' => $pName]);
        
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}