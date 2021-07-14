<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="home.php?page=product&action=listDetail">Sneaker Shop</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Quan Ly san Pham
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="home.php?page=product&action=list">List</a>
                    <a class="dropdown-item" href="home.php?page=product&action=add">Add Products</a>
                    <a class="dropdown-item" href="home.php?page=product&action=listDetail">List Order Detail</a>
                </div>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="connection.php?page=product&action=add_User">SignUp</a>
            </li>

        </ul>
        <form class="form-inline my-2 my-lg-0" method="post" action="home.php?page=product&action=search">
            <input class="form-control mr-sm-2" type="search" name="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>
