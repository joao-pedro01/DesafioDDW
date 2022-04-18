<!-- NavBar pastas -->
<style>
    .tn-outline-dark {
        margin-left: 10rem;
    }
</style>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Desafio DDW</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="../index.html">Home</a>
                </li>
            
                <li class="nav-item">
                    <a class="nav-link active" href="#">Sobre nós</a>
                </li>
                
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Categorias
                    </a>

                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <?php
                            $results = DB::query("SELECT nome_categoria FROM categoria");
                            foreach ($results as $row){
                                $str = strtolower($row['nome_categoria']);

                                echo '<li><a class="dropdown-item" href="'.$str.'.php">'.$row['nome_categoria'].'</a></li>';
                            }
                        ?>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#"></a></li>
                    </ul>
                </li>
            </ul>

            <form class="d-flex">
                <select id="option" class="form-select select-nav" aria-label="Default select example" required>
                    <option selected disabled value="">Selecione</option>
                    <?php
                    $results = DB::query("SELECT nome_categoria FROM categoria");
                        foreach ($results as $row){
                            $str = strtolower($row['nome_categoria']);

                            echo '<option value="'.$str.$row['nome_categoria'].'</option>';
                        }
                    ?>
                    <option value="horror">Anabelle (Terror)</option>
                    <option value="drama">Batalha Bilionária: O Caso Google Earth (Drama/Tecnologia)</option>
                    <option value="kids">Monstros no Trabalho (Infantil)</option>
                    <option value="family">Hotel Transylvania: A Série (Para Familia)</option>
                </select>

                <button class="btn btn-outline-dark btn-nav" id="value" type="button" value=1 onclick="Escolha();">Enviar</button>
                
                <a href="../pages/register.php"><button class="btn btn-outline-success btn-nav" id="value" type="button">Cadastre-se</button></a>
                <a href="../pages/login.php"><button class="btn btn-outline-light btn-nav" id="value" type="button">Entrar</button></a>
            </form>
        </div>
    </div>
</nav>