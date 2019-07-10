<?php
return array(
    'register'     => array(
        'success' => array(
            'title'  => 'Toko anda berhasil dibuat!',
            'body'   => 'Selamat toko anda sudah berhasil di buat!',
            'button' => 'Klik disini untuk mengatur toko anda!'
        ),
        'error'   => array(
            'ip-limit' => 'Maaf, silakan coba register 5 menit lagi.'
        ),
    ),
    'login-member' => array(
        'error'   => array(
            'email'     => 'Maaf, toko dengan email tersebut tidak ditemukan.',
            'password'  => 'Maaf, password yang anda masukkan salah.',
            'not_found' => 'Maaf, akun tidak ditemukan.',
        ),
        'success' => '<h4>Selamat datang :obj</h4>, <h4>Akun toko anda ditemukan.</h4>',
        'auto_logout' => "Kamu secara otomatis telah logout, silakan login kembali."
    ),

    'success'      => array(
        'create'               => 'Berhasil membuat :obj baru. ',
        'upload'               => 'Berhasil meng-upload :obj baru. ',
        'update'               => 'Berhasil mengupdate :obj . ',
        'delete'               => 'Berhasil menghapus :obj',
        'reset'               => 'Berhasil mereset :obj',
        'install_theme'        => 'Tema berhasil di install di akun kamu.',
        'install_power_up'     => 'Power Up berhasil di install di akun kamu.',
        'payment_confirmation' => 'Konfirmasi Pembayaran anda sudah terkirim.',
        'non_activated'        => 'Berhasil menon-aktifkan :obj.',
        'activated'            => 'Berhasil mengaktifkan :obj.',
        'register'             => 'Horee.. Website kamu sudah selesai di buat, silakan mulai mengatur websitenya dan mulai ngide!',
        'forget-password'      => 'Selamat, password reset sudah dikirim ke email kamu!',
        'reset-password'       => 'Selamat, password sudah berhasil direset. Silakan login kembali!',
        'login' => 'Selamat, kamu berhasil login ke dalam sistem.',
        'logout' => 'kamu berhasil logout ke dalam sistem.',
        'login_member' => 'Selamat, kamu berhasil login',
        'logout_member' => 'Kamu berhasil logout',
        'reset_pass'               => 'Berhasil mengupdate password kamu.',
        'import'               => 'Berhasil mengimport :obj .',
        'export'               => 'Berhasil mengexport :obj .',
        'install-theme'               => 'Berhasil menginstall theme .',
        'thanks_msg'               => 'Terimakasih, Pesan telah terkirim..',
        'connect_instagram'               => 'Berhasil menyambungkan akun Instagram.',
    ),

    'error'        => array(
        'create'               => 'Woops, gagal membuat :obj baru',
        'update'               => 'Woops, gagal mengupdate :obj',
        'delete'               => 'Woops, gagal menghapus :obj',
        'exist'                => 'Woops, :obj sudah ada di server',
        'size'                 => 'Woops, kapasitas penyimpanan tidak cukup untuk menambah :obj',
        'install_theme'        => 'Tema tidak berhasil di install, silakan coba lagi.',
        'install_power_up'     => 'Power Up tidak berhasil di install, silakan coba lagi.',
        'limit_install_power_up'     => 'Silakan upgrade akun kamu untuk bisa menginstall powerup',
        'payment_confirmation' => 'Konfirmasi Pembayaran anda gagal terkirim.',
        'login' => array(
            'email' => 'Email yang kamu masukkan tidak ditemukan',
            'password' => 'Password yang anda masukkan masih salah.',
            'account' => 'Akun dengan email tersebut tidak ditemukan.',
            'not_active' => 'Akun dengan email tersebut tidak aktif',
            'permission' => 'Kamu tidak punya akses untuk halaman ini.'
        ),
        'reset_pass'               => 'Reset code password anda tidak ditemukan.',
        'fail_pass'               => 'Password anda tidak berhasil di reset',
        'fail_recover'               => 'Kode recovery anda tidak ditemukan, silakan kembali ke halaman forgot password!',
    ),
    'admin'      => array(
        'set_template'               => 'Maaf, anda hanya bisa menginstall maximum 2 tema. Silakan upgrade akun anda agar bisa menginstall tema lebih dari 2.',
        'upload'               => 'Berhasil meng-upload :obj baru. ',
        'update'               => 'Berhasil mengupdate :obj . ',
        'delete'               => 'Berhasil menghapus :obj',
        'required'               => 'Silakan isi semua input yang disediakan.',
        'blog' => array(
            'required'               => 'Silakan isi semua input yang disediakan.',
            'unique'               => 'Judul sudah ada, coba yg lain.',
            'category'         => 'Kategori Blog',
        ),
        'discount' => array(
            'discount'         => 'Discount',
            'unique'         => 'Kode diskon sudah terpakai, coba yang lain.',
            'between'         => 'Besar potongan tidak boleh lebih dari 100 %',
        ),
        'shipping' => array(
            'package'         => 'Paket Ekspedisi',
            'set_package'         => 'Pengaturan Ekspedisi',
            'wrong_package'         => 'Paket Ekspedisi salah..'
        ),
        'pages' => array(
            'page'         => 'Halaman',
        ),
        'link' => array(
            'max'         => 'Jumlah maksimal group tautan yang di perbolehkan dalam paket gratis adalah :obj silakan upgrade paket kamu.',
        ),
        'category' => array(
            'cat'         => 'Kategori',
            'sort'         => 'Urutan Kategori',
            'max'         => 'Nama kategori tidak boleh melebihi 200 karakter',
            'alpha_num_space'         => 'Nama kategori hanya boleh di isi dengan huruf dan angka.',
        ),
        'collect' => array(
            'col'         => 'Koleksi',
            'create'         => 'Koleksi telah berhasil dibuat. <br>Silakan tambahkan produk ke dalam Koleksi ini',
            'edit'         => 'Koleksi telah berhasil di simpan. <br>Silakan cek produk di dalam Koleksi ini',
        ),
        'costumer' => array(
            'order'         => 'Order',
            'cos'         => 'Pelanggan',
            'wrong'         => 'Data Pelanggan salah, silakan coba lagi',
            'unique'         => 'Email yang kamu gunakan sudah terdaftar sebagai member/mitra.',
        ),
        'setting' => array(
            'mall'         => 'Upgrade Paket untuk dapat menggunakan fitur Jarvis Mall !',
            'laporan'         => 'Silakan tulis Laporan/Pesan yg ingin disampaikan!',
        ),
        'powerup' => array(
            'mall'         => 'Upgrade your Package for use feature Jarvis Mall !',
            'laporan'         => 'Please send the message to us!',
        ),
        'powerup' => array(
            'trusklik_success'         => 'Website anda berhasil terintegrasi dengan TrustKlik!',
            'trusklik_error'         => 'Ada kesalahan pada nama domain anda.',
            'trusklik_domain'         => 'Domain anda sudah terdaftar di TrustKlik!',
            'trusklik_email'         => 'Alamat email anda salah.',
        ),
        'product' => array(
            'img'         => 'Gambar Produk',
            'pro'         => 'Produk',
            'mall_pro'         => 'Mall Product',
            'name'         => 'Nama Produk harus diisi!',
            'csv'         => 'Harap lengkapi data csv produk anda untuk produk',
            'max'         => 'Opps, Jumlah produk anda sudah mencapai maximal produk untuk paket toko anda',
            'image'         => 'Opps, Anda belum memilih gambar untuk produk anda',
            'max_image'         => 'Anda hanya bisa memiliki maksimal 4 gambar per produk',
        ),
        'slide' => array(
            'max'         => 'Maximal slideshow kamu hanya 5 buah.',
            'max_free'         => 'Maximal slideshow dalam paket FREE hanya '.Config::get('free.total_slide').' buah.',
        ),
        'rates' => array(
            'rate'         => 'Rate',
        ),
        'close' => 'Tutup',
        'upgrade' => 'Upgrade Paket',
    ),
    'frontend'      => array(
        'shopcart' => array(
            'coupon_notfound'         => 'Maaf, Kupon diskon tidak ditemukan.',
            'coupon_expired'          => 'Maaf, Masa berlaku kupon diskon anda sudah habis.',
            'coupon_notavail'         => 'Maaf, kupon sudah tidak tersedia.',
            'coupon_minimum'          => 'Maaf, Order Tidak Memenuhi minimal belanja sebesar :obj',
            'shipping_notfound'       => 'Tidak ditemukan ekpedisi dari',
            'destination'             => 'ke tujuan',
            'shipping_list'           => 'Ekspedisi list dari',
            'here'                    => 'disini',
            'info_shipping'               => 'untuk informasi pengiriman silakan hubungi kami',
            'member_email'               => 'Alamat email sudah digunakan. Coba yang lain atau silakan login.',
        ),
        'contact' => array(
            'success'         => 'Pesan kamu sudah berhasil di kirim.',
            'failed'         => 'Pesan kamu tidak berhasil di kirim.',
        ),
        'testimonial' => array(
            'success'         => 'Selamat testimonial kamu sudah berhasil di tambahkan. Akan muncul ketika sudah di aktifkan oleh admin.',
        ),
    ),
);