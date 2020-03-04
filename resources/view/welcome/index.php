<main class="card-body container-fluid">
    <?php
    $textMove = $this->getComponent("textMove");
    $textMove->setText("Welcome the Pendragón Framework");
    $textMove->render();
    ?>
    <hr/>
    <div class="d-inline">
        <a class="ml-3 mr-3" href="https://github.com/jvrcavalcanti" target="blank">
            <img src="<?= img('accolon.png') ?>" title="Accolon" />
        </a>
    </div>
    <br/>
    <a class="nav-link" href="https://github.com/jvrcavalcanti/Pendragon" target="blank" >Github</a>
</main>