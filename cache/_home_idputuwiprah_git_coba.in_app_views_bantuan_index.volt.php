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
    <h1>Bantuan Terkumpul</h1>

    <br>

    <?= $this->flashSession->output() ?>

    <table id="table_id" class="display">
        <thead>
            <tr>
                <th>User</th>
                <th>Nama</th>
                <th>Kategori</th>
                <th>Jumlah</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($items as $item) { ?>
            <tr>
                <td><?= $item->bantuan->users->nama ?></td>
                <td><?= $item->nama_item ?></td>
                <td><?= $item->kategori->nama_kategori ?></td>
                <td><?= $item->jumlah ?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>

    <?= $this->tag->linkTo(['/bantuan/tambah', 'Tambah', 'class' => 'btn btn-primary btn-large btn-success']) ?>

</body>

