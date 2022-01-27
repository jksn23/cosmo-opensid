<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<style type="text/css">
  .nama-desa {
    font-weight: bold;
  }

</style>

<header class="header">
  <div class="header__group">
    <a href="<?= site_url('/') ?>" class="header-brand">
      <img src="<?= gambar_desa($desa['logo']) ?>" alt="Logo <?= ucfirst($this->setting->sebutan_desa).' '.ucwords($desa['nama_desa']) ?>" class="header-brand__logo">
      <div class="header-brand__group">
          <h1 class="header-brand__title namadesa"></h1>
        <span class="header-brand__subtitle"><?= ucfirst($this->setting->sebutan_kecamatan_singkat) ?> <?= ucwords($desa['nama_kecamatan']) ?>, <?= ucfirst($this->setting->sebutan_kabupaten_singkat) ?> <?= ucwords($desa['nama_kabupaten']) ?>, Prov. <?= ucwords($desa['nama_propinsi']) ?></span>
      </div>
    </a>
    <button class="button button--menu"><i class="fa fa-list"></i> <span>MENU</span></button>
  </div>
  <?php $this->load->view($folder_themes .'/commons/nav') ?>
</header>

<!-- GSAP -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/TextPlugin.min.js"></script>



<script type="text/javascript">
  gsap.registerPlugin(TextPlugin);
  gsap.to(".namadesa", {
    duration:3,
    text: "WEBSITE RESMI DESA PATOKAAN"
  })


</script>