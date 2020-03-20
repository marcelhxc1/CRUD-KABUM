    <?php if (isLoggedIn()): ?>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand active" href="#">Olá, <?= $_SESSION['user_name']; ?></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/listar-clientes.php">Listar Clientes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/clientes.php">Cadastrar Clientes</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="logout.php">Sair</a></a>
                </li>
                </ul>
            </div>
        </nav>
    <?php endif; ?>