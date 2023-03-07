<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $data['judul']; ?></title>
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/bootstrap.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/style.css">
    <link rel="icon" href="<?= BASEURL; ?>/img/icon-logo.svg" />
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark">
  <div class="container">
    <a class="navbar-brand" href="<?= BASEURL; ?>/home"><img src="<?= BASEURL; ?>/img/logo.svg" width="120px"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link <?= ($data['judul'] === 'Home') ? 'active' : ''?>" href="<?= BASEURL; ?>/home" style="<?= ($data['judul'] === 'Home') ? 'border-bottom: 2px solid #fff;' : ''?>">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= ($data['judul'] === 'About') ? 'active' : ''?>" href="<?= BASEURL; ?>/about" style="<?= ($data['judul'] === 'About') ? 'border-bottom: 2px solid #fff;' : ''?>">ABOUT</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= ($data['judul'] === 'Services') ? 'active' : ''?>" href="<?= BASEURL; ?>/services" style="<?= ($data['judul'] === 'Services') ? 'border-bottom: 2px solid #fff;' : ''?>">SERVICES</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= ($data['judul'] === 'Facilities') ? 'active' : ''?>" href="<?= BASEURL; ?>/facilities" style="<?= ($data['judul'] === 'Facilities') ? 'border-bottom: 2px solid #fff;' : ''?>">FACILITIES</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= ($data['judul'] === 'Contact Us') ? 'active' : ''?>" href="<?= BASEURL; ?>/contactus" style="<?= ($data['judul'] === 'Contact Us') ? 'border-bottom: 2px solid #fff;' : ''?>">CONTACT US</a>
        </li>
      </ul>
    </div>
  </div>
</nav>