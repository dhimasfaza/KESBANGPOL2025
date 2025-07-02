<footer class="footer">
  <!-- Baris Pertama -->
  <div class="footer-top d-flex align-items-center ps-4">
    <div class="footer-brand d-flex align-items-center">
      <a class="footer-logo-group d-flex align-items-center me-3" href="/">
        <img src="<?php echo e(asset('images/component/logo3.png')); ?>" alt="Logo Kota Bandung" class="footer-logo img-fluid">
        <img src="<?php echo e(asset('images/component/logo1-2.png')); ?>" alt="Logo Bakesbangpol" class="footer-logo img-fluid">
      </a>
      <div class="footer-title text-left fw-bold">
        <div>BADAN KESATUAN BANGSA DAN POLITIK</div>
        <div>KOTA BANDUNG</div>
      </div>
    </div>
  </div>

  <!-- Baris Kedua -->
  <div class="footer-main">
    
    <!-- Kiri: Alamat dan Jam Kerja -->
    <div class="footer-column footer-left">
      <h4>Alamat</h4>
      <p>Jl. Wastukencana No.2, Babakan Ciamis, <br> Kec. Sumur Bandung, Kota Bandung, <br> Jawa Barat 40117</p>
      
      <div class="working-hours">
        <h4>Jam Kerja</h4>
        <p><span>Senin - Jumat</span><span class="jam">08.00 - 16.00 WIB</span></p>
      </div>  
    </div>
    
    <!-- Tengah: Tentang Kami dan Ikuti Kami -->
    <div class="footer-column footer-middle">
      <div class="tentang-kami">
        <h4>Tentang Kami</h4>
        <ul class="footer-links footer-tentangkami-links">
          <li><a href="<?php echo e(route('tampilvisimisi')); ?>">Visi Misi <i class="fas fa-angle-right fa-icon-hover"></i></a></li>
          <li><a href="<?php echo e(route('tampiltugasfungsi')); ?>">Tugas dan Fungsi <i class="fas fa-angle-right fa-icon-hover"></i></a></li>
          <li><a href="<?php echo e(route('tampilstruktur')); ?>">Struktur Organisasi <i class="fas fa-angle-right fa-icon-hover"></i></a></li>
          <li><a href="https://layanan.bandung.go.id">Simple Sakti <i class="fas fa-angle-right fa-icon-hover"></i></a></li>
        </ul>
      </div>


      <div class="ikuti-Kami">
        <div class="footer-divider"></div>
        <h4>Ikuti Kami</h4>
        <div class="footer-social">
          <a href="mailto:bkbp@bandung.go.id"><i class="fas fa-envelope"></i></a>
          <a href="https://www.instagram.com/bakesbangpolkotabandung/" target="_blank"><i class="fab fa-instagram"></i></a>
          <a href="https://www.tiktok.com/@kesbangpolkotabandung" target="_blank"><i class="fab fa-tiktok"></i></a>
          <a href="#"><i class="fab fa-youtube"></i></a>
        </div>
      </div>
      
    </div>
  
    <!-- Kanan: Google Maps -->
    <div class="footer-column footer-right">
      <div class="footer-map">
        <iframe 
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1980.422750703021!2d107.61025168324443!3d-6.909070212796336!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e63a6d8df397%3A0xa78857f0be375298!2sKesbangpol%20Kota%20Bandung!5e0!3m2!1sen!2sid!4v1745050653864!5m2!1sen!2sid" 
          loading="lazy" 
          referrerpolicy="no-referrer-when-downgrade">
        </iframe>
      </div>
    </div>
  </div>
  
  <!-- Baris Ketiga: Copyright -->
  <div class="footer-bottom">
    <p>&copy; 2025 Badan Kesatuan Bangsa dan Politik Kota Bandung. All rights reserved.</p>
  </div>
</footer>
<?php /**PATH D:\TUBES IAE\KESBANGPOL2025\resources\views/landingpage/shared/footer.blade.php ENDPATH**/ ?>