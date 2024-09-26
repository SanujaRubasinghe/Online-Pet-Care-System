<?php
    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin']) {
        echo "<header>

    <div class='off-screen-menu'>
        <ul>
            <a href='#home'><li>Home</li></a>
            <a href='#services'><li>Services</li></a>
            <a href='#pharmacy'><li>Pharmacy</li></a>
            <a href='pet_store.php'><li>Pet Store</li></a>
        </ul>
    </div>

    <nav>
        <div class='hb_menu'>
            <div></div>
            <div></div>
            <div></div>
        </div>

        <img id='logo' src='assets/images/logo.jpeg' alt='' width='80px'>

        <form action=''>
            <input type='text'>
            <button type='submit'>search</button>
        </form>

        <a href='".$_SESSION['profile_path']."'><img id='user_profile_picture' src='assets/images/logo.jpeg' alt='' width='80px'></a>
        <p>".$_SESSION['userid']."</p>
    </nav>
</header>";
    } else {
        echo "<header>

    <div class='off-screen-menu'>
        <ul>
            <a href='#home'><li>Home</li></a>
            <a href='#services'><li>Services</li></a>
            <a href='#pharmacy'><li>Pharmacy</li></a>
            <a href='pet_store.php'><li>Pet Store</li></a>
        </ul>
    </div>

    <nav>
        <div class='hb_menu'>
            <div></div>
            <div></div>
            <div></div>
        </div>

        <img id='logo' src='assets/images/logo.jpeg' alt='' width='80px'>

        <form action=''>
            <input type='text'>
            <button type='submit'>search</button>
        </form>

        <a href='process/login.php'><button class='login-signup-btn'>Login</button></a>
        <a href='process/sign_up.php'><button class='login-signup-btn'>Sign up</button></a>
    </nav>
</header>";
    }
?>




