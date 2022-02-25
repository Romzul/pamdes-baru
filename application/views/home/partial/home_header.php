<!DOCTYPE html>
<html lang="en">

<head>

  <title>Pamdes | Peringgasela</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Main CSS-->
  <link rel="stylesheet" type="text/css" href="<?= base_url('assets/'); ?>css/main.css">
  <!-- Font-icon css-->
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body class="app sidebar-mini">
  <!-- Navbar-->
  <header class="app-header">
    <a class="app-header__logo" href="index.html">
      <img class="mb-1 pb-1 app-logo" src="<?= base_url('assets/'); ?>images/Logo.png" alt="">
    </a>
    <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar"
      aria-label="Hide Sidebar"></a>
    <!-- Navbar Right Menu-->
    <ul class="app-nav">
      <li><a class="app-search" style="color: var(--point)" href="#" data-toggle="dropdown"
          aria-label="Open Profile Menu">
          <center>
            <i class="fa-solid fa-calendar-week"></i>
          </center>
          <b>Sabtu, 12
            Februari
            2022,
            22:37 WITA</b>
        </a>
      </li>
    </ul>
  </header>
  <!-- Sidebar menu-->
  <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
  <aside class="app-sidebar">
    <ul class="app-menu">
      <li>
        <a class="app-menu__item" href="<?= base_url('Home'); ?>"><i class="app-menu__icon fa-solid fa-house"></i><span
            class="app-menu__label">Dashboard</span></a>
      </li>
      <li>
        <a class="app-menu__item" href="Pembayaran.html"><i class=" app-menu__icon fa-solid fa-credit-card"></i><span
            class="app-menu__label">Pembayaran</span></a>
      </li>
      <li>
        <a class="app-menu__item" href="<?= base_url('Data_pelanggan'); ?>"><i class="app-menu__icon fa-solid fa-user-group"></i><span
            class="app-menu__label">Data
            Pelanggan</span></a>
      </li>
      <li>
        <a class="app-menu__item " href="pelaporan.html"><i class="app-menu__icon fa-solid fa-book"></i><span
            class="app-menu__label">Pelaporan</span></a>
      </li>
      <li>
        <a class="app-menu__item " href="ubah-kata-sandi.html"><i class="app-menu__icon fa-solid fa-gear"></i><span
            class="app-menu__label">Ubah
            Kata Sandi</span></a>
      </li>
      <li>
        <a class="app-menu__item " href="login.html"><i
            class="app-menu__icon fa-solid fa-arrow-right-from-bracket"></i><span
            class="app-menu__label">keluar</span></a>
      </li>
    </ul>
    <ul class="app-menu marbo">
      <li>
        <a onclick="myFunction()" class="app-menu__item " href="#"><i
            class="app-menu__icon fa-solid fa-lightbulb "></i><span class="app-menu__label">Mode
            Gelap</span></a>
      </li>
      <li>
        <span class="app-menu__item" href="#"><i class="app-menu__icon fa-solid fa-copyright copyright"></i><span
            class="app-menu__label copyright">Copyright PAMDES
            2022</span></span>
      </li>
    </ul>
  </aside>
