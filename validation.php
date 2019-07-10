<?php

return array(

	/*
	|--------------------------------------------------------------------------
	| Validation Language Lines
	|--------------------------------------------------------------------------
	|
	| following language lines contain default error messages used by
	| validator class. Some of these rules have multiple versions such
	| such as size rules. Feel free to tweak each of these messages.
	|
	*/

	"accepted"         => ":attribute harus di diterima.",
	"active_url"       => ":attribute bukan valid URL.",
	"after"            => ":attribute harus tanggal setelah :date.",
	"alpha"            => ":attribute hanya boleh berisi huruf.",
	"alpha_dash"       => ":attribute hanya boleh berisi huruf, angka, and garis bawah.",
	"alpha_num"        => ":attribute hanya boleh berisi huruf dan angka.",
	"array"            => ":attribute harus berupa array.",
	"before"           => ":attribute harus sebuah tanggal sebelum :date.",
	"between"          => array(
		"numeric" => ":attribute harus di antara :min - :max.",
		"file"    => ":attribute harus di antara :min - :max kilobytes.",
		"string"  => ":attribute harus di antara :min - :max characters.",
		"array"   => ":attribute harus di antara :min - :max items.",
	),
	"confirmed"        => ":attribute konfirmasi tidak cocok.",
	"date"             => ":attribute bukan tanggal yang valid.",
	"date_format"      => ":attribute tidak sesuai dengan format :format.",
	"different"        => ":attribute dan :other harus berbeda.",
	"digits"           => ":attribute harus :digits digits.",
	"digits_between"   => ":attribute harus di antara :min dan :max digits.",
	"email"            => ":attribute format tidak valid.",
	"exists"           => "selected :attribute tidak valid.",
	"image"            => ":attribute harus berupa gambar.",
	"in"               => "selected :attribute tidak valid.",
	"integer"          => ":attribute harus sebuah angka.",
	"ip"               => ":attribute harus sebuah valid IP address.",
	"max"              => array(
		"numeric" => ":attribute tidak boleh lebih besar dari :max.",
		"file"    => ":attribute tidak boleh lebih besar dari :max kilobytes.",
		"string"  => ":attribute tidak boleh lebih besar dari :max characters.",
		"array"   => ":attribute tidak boleh lebih besar dari :max items.",
	),
	"mimes"            => ":attribute harus file dengan tipe: :values.",
	"min"              => array(
		"numeric" => ":attribute harus minimal :min.",
		"file"    => ":attribute harus minimal :min kilobytes.",
		"string"  => ":attribute harus minimal :min characters.",
		"array"   => ":attribute harus minimal :min items.",
	),
	"not_in"           => ":attribute yang dipilih tidak valid.",
	"numeric"          => ":attribute harus sebuah number.",
	"regex"            => ":attribute format tidak valid.",
	"required"         => ":attribute masih kosong.",
	"required_if"      => ":attribute ini diperlukan saat :other sama dengan :value.",
	"required_with"    => ":attribute ini diperlukan saat :values tersedia.",
	"required_without" => ":attribute ini diperlukan saat :values tidak tersedia.",
	"same"             => ":attribute dan :other harus sama.",
	"size"             => array(
		"numeric" => ":attribute harus bernilai :size.",
		"file"    => ":attribute harus berukuran :size kilobytes.",
		"string"  => ":attribute harus :size characters.",
		"array"   => ":attribute harus berisi :size items.",
	),
	"unique"           => ":attribute sudah digunakan, silakan pilih yang lain.",
	"url"              => ":attribute format tidak valid.",
	'ceknamatoko' 	=> 'Maaf, Nama toko yang anda pilih sudah digunakan, silakan pilih yang lain.',
	'alpha_num_space' => 'Pastikan nama toko anda hanya berisi huruf angka dan spasi saja.',
	'alpha_num_without_space' => 'Nama domain jarvis anda tidak di ijinkan.',
	'domain'			=> 'Alamat domain anda salah.',
	"max_length"              => ":attribute tidak boleh lebih besar dari :value  ",
	"min_length"              => ":attribute harus lebih besar dari :value ",
	"unique_category"              => ":attribute sudah ada di dalam parent kategori yang sama.",

	/*
	|--------------------------------------------------------------------------
	| Custom Validation Language Lines
	|--------------------------------------------------------------------------
	|
	| Here you may specify custom validation messages for attributes using the
	| convention "attribute.rule" to name lines. This makes it quick to
	| specify a specific custom language line for a given attribute rule.
	|
	*/

	'custom' => array(),

	/*
	|--------------------------------------------------------------------------
	| Custom Validation Attributes
	|--------------------------------------------------------------------------
	|
	| following language lines are used to swap attribute place-holders
	| with something more reader friendly such as E-Mail Address instead
	| of "email". This simply helps us make messages a little cleaner.
	|
	*/

	'attributes' => array(
		'namatoko' => 'Nama toko kamu',
		'email' => 'Email kamu',
		'password' => 'Password',
		'readme' => 'Syarat & Ketentuan',
		'capcha' => 'Kode Keamanan',
		'namaKontak' => 'Nama kamu',
        'emailKontak' => 'Email kamu',
        'messageKontak' => 'Pesan',
        'g-recaptcha-response' => 'Capcha',
        'unique_category' => 'kategori',
        'minBuy'	=> 'Minimum belanja',
		),

);
