<head>
    <nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top">
        <!-- Brand -->
        <a class="navbar-brand" href="/bantuan">Tolong<sup>.in</sup></a>
    
        <!-- Links -->
        <ul class="navbar-nav ml-auto">
            <!-- Dropdown -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                <?= $user->nama ?>
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="/user/logout">Logout</a>
                </div>
            </li>
        </ul>
    </nav>
</head>

<body>
    <div class="page-header">
        <h2>Masukan Bantuan Mu!</h2>
    </div>
    
    <br>
    
    <form action="/bantuan/tambah" role="form" method="post">
        <fieldset>
            <div class="form-group">
                <label for="quantity">Jumlah Bantuan yang ingin diberikan?<br><br></label>
                <div class="controls">
                    <input id="num" type="number" name="banyak_form"<?php if (isset($banyak)) { ?>value="<?= $banyak ?>"<?php } ?>>
                </div>
            </div>
    
            <div class="form-group">
                <?= $this->tag->submitButton(['Submit', 'class' => 'btn btn-secondary']) ?>
            </div>
        </fieldset>
    </form><?php if (isset($banyak) && ($banyak > 0)) { ?><form action="/bantuan/sumbangan" role="form" method="post">
        <fieldset>
            <?php foreach (range(1, $banyak) as $i) { ?>
            <div class="mb-5">
                <label><b>Barang <?= $i ?></b></label>
                <div class="form-group">
                    <label for="text">Nama Bantuan</label>
                    <div class="controls">
                        <?= $this->tag->textField(['nama[]', 'class' => 'form-control']) ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email">Kategori</label>
                    <div class="controls">
                        <select name="category[]">
                            <?php foreach ($categories as $kategori) { ?>
                            <option value="<?= $kategori->id_kategori ?>"><?= $kategori->nama_kategori ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="text">Jumlah</label>
                    <div class="controls">
                        <?= $this->tag->textField(['jumlah[]', 'class' => 'form-control']) ?>
                    </div>
                </div>
            </div>
            <?php } ?>
            <div class="form-group">
                <?= $this->tag->submitButton(['Submit', 'class' => 'btn btn-primary btn-large']) ?>
            </div>
        </fieldset>
    </form><?php } ?></body>
