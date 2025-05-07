<footer id="footer" class="footer dark-background">

<div class="container footer-top">
  <div class="row gy-4">
    <div class="col-lg-4 col-md-6 footer-about">
      <a href="{{ route('home') }}" class="logo d-flex align-items-center">
        <span class="sitename">Mahir Trans Bersaudara</span>
      </a>
      <div class="footer-contact pt-3">
        <p>{{ __('msg.alamat_1') }}</p>
        <p>{{ __('msg.alamat_2') }}</p>
        <p class="mt-3"><strong>{{ __('msg.telepon') }}:</strong> <span>{{ __('msg.isi_telepon') }}</span></p>
        <p><strong>{{ __('msg.email') }}:</strong> <span>{{ __('msg.isi_email') }}</span></p>
      </div>
      <div class="social-links d-flex mt-4">
        <a href=""><i class="bi bi-twitter-x"></i></a>
        <a href=""><i class="bi bi-facebook"></i></a>
        <a href=""><i class="bi bi-instagram"></i></a>
        <a href=""><i class="bi bi-linkedin"></i></a>
      </div>
    </div>

    <div class="col-lg-2 col-md-3 footer-links">
      <h4>{{ __('msg.link_terkait') }}</h4>
      <ul>
        <li><a href="{{ route('home') }}">{{ __('msg.menu_beranda') }}</a></li>
        <li><a href="{{ route('tentang-kami') }}">{{ __('msg.menu_tentang') }}</a></li>
        <li><a href="{{ route('layanan') }}">{{ __('msg.menu_layanan') }}</a></li>
        <li><a href="{{ route('galeri') }}">{{ __('msg.menu_galeri') }}</a></li>
        <li><a href="{{ route('mitra') }}">{{ __('msg.menu_mitra') }}</a></li>
        <li><a href="{{ route('kontak') }}">{{ __('msg.menu_kontak') }}</a></li>
      </ul>
    </div>

    <div class="col-lg-2 col-md-3 footer-links">
      <h4>{{ __('msg.penawaran') }}</h4>
      <ul>
        <li><a href="{{ route('pemesanan') }}">{{ __('msg.pemesanan') }}</a></li>
        <li><a href="{{ route('ekspedisi') }}">{{ __('msg.ekspedisi') }}</a></li>
        <li><a href="{{ route('produk') }}">{{ __('msg.jenis_alat_berat') }}</a></li>
        <li><a href="{{ route('pabrikasi') }}">{{ __('msg.pabrikasi') }}</a></li>
        <li><a href="{{ route('penyewaan') }}">{{ __('msg.penyewaan') }}</a></li>
        <li><a href="{{ route('perbaikan') }}">{{ __('msg.perbaikan') }}</a></li>
        <li><a href="{{ route('supplier') }}">{{ __('msg.supplier') }}</a></li>
        <li><a href="{{ route('sk') }}">{{ __('msg.syarat_ketentuan') }}</a></li>
      </ul>
    </div>

    <div class="col-lg-4 col-md-12 footer-map">
      <h4>{{ __('msg.lokasi') }}</h4>
      <iframe 
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.9386769430907!2d101.24632337472437!3d1.203157198785362!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d37d001e7af6f1%3A0xa2420c34cf554749!2sPT.%20Mahir%20Trans%20Bersaudara!5e0!3m2!1sid!2sid!4v1741749036626!5m2!1sid!2sid"
        width="100%" 
        height="250" 
        style="border:0;" 
        allowfullscreen="" 
        loading="lazy" 
        referrerpolicy="no-referrer-when-downgrade">
      </iframe>
    </div>

  </div>
</div>

<div class="container copyright text-center mt-4">
  <p>© <span>{{ __('msg.copyright') }}</span> <strong class="px-1 sitename">Mahir Trans Bersaudara</strong> <span>{{ __('msg.copyright1') }}</span></p>
  <div class="credits">
  {{ __('msg.designed_by') }} <a href="{{ route('home') }}">PT. Mahir Trans Bersaudara</a>
  </div>
</div>

</footer>