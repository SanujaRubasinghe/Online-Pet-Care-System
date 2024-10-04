<?php
    session_start();
    require 'process/connect_dbshop.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Care Pharmacy</title>
    <link rel="stylesheet" href="css/pharmacy.css">
    <link rel="stylesheet" href="css/main.css">

    <script src="js/main.js" defer></script>
</head>
<body>

    <?php require 'include/header.php'; ?>

    <div class="container">
        <section class="header-pharmacy">
            <h1>Pet Care Pharmacy</h1>
        </section>
        <main>
            <div class="product-list">
                <?php
                    $get_products_data = "select * from product_data where product_type='medicine'";
                    $results = $conn->query($get_products_data);

                    if ($results->num_rows > 0) {
                        while ($row = $results->fetch_assoc()) {
                            $id = $row['product_id'];
                            $image_path = $row['product_image_path'];
                            $price = $row['product_price'];
                            $name = $row['product_name'];

                ?>
                        <div class="product">
                            <img src="assets/images/product_images/<?php echo $image_path ?>" alt="Item <?php echo $id ?>">
                            <h2><?php echo $name ?></h2>
                            <p>Price: Rs.<?php echo $price ?></p>
                            <button onclick="addToCart(<?php echo $id ?>)">Add to Cart</button>
                        </div>
                <?php
                        }
                    } else {
                        echo "No Products";
                    }
                ?>
                
                
            </div>
            <!-- <div class="product-list">
                <div class="product">
                    <img src="st.jpg" alt="Item7">
                    <h2>Skin & Stomach Medicine</h2>
                    <p>Price: Rs.2500.00</p>
                    <button onclick="addToCart('Skin & Stomach Medicine',2500)">Add to Cart</button>
                </div>
                <div class="product">
                    <img src="seresto.jpg" alt="Item 8">
                    <h2>Flea & Tick Collar</h2>
                    <p>Price: Rs.4800.00</p>
                    <button onclick="addToCart('Flea & Tick Collar',4800)">Add to Cart</button>
                </div>
                <div class="product">
                    <img src="spray.jpg" alt="Item 9">
                    <h2>Pain Releaf Sprays</h2>
                    <p>Price: Rs.5000.00</p>
                    <button onclick="addToCart('Pain Releafe Sprays',5000)">Add to Cart</button>
                </div>
            </div> -->
            <!--<div class="cart"> 
                <h2>Shopping Cart</h2>
                <ul id="cart-items"></ul>
                <p id="total-price">Total: Rs.0.00</p>
                <button id="checkout" onclick="checkout()">Checkout</button>
            </div>-->
        </main>
    </div>
    <script>
        function addToCart(product_id) {
            fetch("process/user_profile/my_cart/update_cart.php", {
                method: "POST",
                headers: {
                    "Content-Type": "application/x-www-form-urlencoded"
                },
                body: "action=add&product_id=" + product_id
            })
            .then(resoponse => resoponse.json())
            .then(data => {
                if (data.status == "success") {
                    alert(`${data.body}`)
                } else {
                    alert(`${data.body}`)
                }
            })
            .catch(error => console.error("Request Failed:", error))
        }
    </script>
</body>
</html>
