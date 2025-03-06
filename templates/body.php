<body>
    <main>
        <?php require_once('templates/form.php'); ?>
        <h1>The 10 most popular <?= $data['genre']; ?> albums</h1>
        <?php foreach ($data['results'] as $album): ?>
        <div class="album">
            <img src="<?=$album["artworkUrl100"] ?>" alt='Poster del album' />
            <div class="album-info">   
                <h2><?=$album["collectionName"] ?></h2>
                <h3>Artist: <?=$album["artistName"]  ?></h3>
                <?php 
                    // Formatear la fecha
                    $releaseDate = new DateTime($album["releaseDate"]);
                ?>
                <p>Release date: <?=$releaseDate->format('d-m-Y')  ?> </p>
            
                <div class="album-links">
                    <?php if (!empty($album["artistViewUrl"])): ?>
                    <a href="<?=$album["artistViewUrl"] ?>"><i class="fas fa-user"></i>Look at the artist on itunes</a> <br>
                    <?php endif;?>
                    <?php if (!empty($album["collectionViewUrl"])): ?>
                    <a href="<?=$album["collectionViewUrl"] ?>"> <i class="fas fa-compact-disc"></i>Look at the album on itunes</a>
                    <?php endif;?>    
                </div>    
            </div> 
        </div>
        <hr> <!-- Separador entre álbumes -->
        <?php endforeach; ?>
    </main>
</body>
