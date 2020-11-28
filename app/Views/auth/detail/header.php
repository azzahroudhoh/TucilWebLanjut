<!-- Awal navigasi bar -->
<nav class="navbar navbar-expand-lg navbar-light bg-info">

<div class="container">
 <a class="navbar-brand font-weight-bold" href="<?= base_url('/'); ?>">Dunia Gadget</a>
 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
   <span class="navbar-toggler-icon"></span>
 </button>
 <div class="collapse navbar-collapse" id="navbarNav">
   <ul class="navbar-nav mr-auto">
   <li class="nav-item active">
        <a class="nav-link" href="<?= base_url('/'); ?>">Home</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="<?= base_url('/about'); ?>">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('/admin'); ?>">Admin</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('/login'); ?>">Logout</a>
      </li>

   </ul>
 </div>
</div>
</nav>

<!-- Akhir navigation bar -->