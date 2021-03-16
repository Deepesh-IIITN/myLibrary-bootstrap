<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="">d-library</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <hr>
            <ul class="navbar-nav ml-auto">
               
                <li class="nav-item <?php echo  $home;?>">
                    <a id="home-link" class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item <?php echo  $issued_books;?>">
                    <a id="issued-book-link" class="nav-link" href="librarian-issued-books.php">Issued Books</a>
                </li>
                <li class="nav-item <?php echo  $all_transactions;?>">
                    <a id="all-transactions-link" class="nav-link" href="librarian-all-transactions.php">All Transactions</a>
                </li>
                <li class="nav-item <?php echo  $profile;?>">
                    <a id="profile-link" class="nav-link" href="profile.php">Profile</a>
                </li>
                <li class="nav-item <?php echo  $logout;?>">
                    <a id="logout-link" class="nav-link" href="logout.php">Logout</a>
                </li>
            </ul>
        </div>
    </nav>