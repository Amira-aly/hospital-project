
<!-- start nav -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/hospital/index.php">Hospital</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="/hospital/index.php">Home</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Doctors
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">                        
                    <a class="dropdown-item" href="/hospital/doctor/list.php">List Doctor</a>
                    <a class="dropdown-item" href="/hospital/doctor/create.php">Add Doctor</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Category
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">                        
                    <a class="dropdown-item" href="/hospital/Category/list.php">List Category</a>
                    <a class="dropdown-item" href="/hospital/Category/create.php">Add Category</a>
                </div>
            </li>
        </ul>
    </div>
</nav>
<!-- end nav -->