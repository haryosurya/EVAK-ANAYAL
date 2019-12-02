<?php

return [
    'id'                    => 'ID',
    'sku'                   => 'SKU',
    'sku_validate'          => 'Hanya karakter dalam grup: "A-Z", "a-z", "0-9" and ".-_" ',
    'description'           => 'Deskripsi Produk',
    'price'                 => 'Harga',
    'price_promotion'       => 'Promosi harga',
    'price_promotion_start' => 'Tanggal Mulai',
    'price_promotion_end'   => 'Tanggal Berakhir',
    'quantity'              => 'Kuantitas',
    'total_price'           => 'Total',
    'attribute'             => 'Atribut',
    'add_product'           => 'Tambahkan produk',
    'edit_product'          => 'Edit produk',
    'category'              => 'Kategori',
    'name'                  => 'Nama',
    'keyword'               => 'Keyword',
    'description'           => 'Deskripsi',
    'content'               => 'Konten',
    'type'                  => 'Tipe',
    'kind'                  => 'Jenis',
    'virtual'               => 'Virtual',
    'cost'                  => 'Biaya harga',
    'stock'                 => 'Stok',
    'view'                  => 'View',
    'sold'                  => 'Terjual',
    'sort'                  => 'Jumlah',
    'image'                 => 'Gambar',
    'status'                => 'Status',
    'date_available'        => 'Tanggal tersedia',
    'import_multi'          => 'Impor beberapa',
    'new'                   => 'Baru',
    'sale'                  => 'Penjualan',
    'brand'                 => 'Merk',
    'vendor'                => 'Vendor',
    'availability'          => 'Ketersediaan',
    'in_stock'              => 'Persediaan',
    'out_stock'              => 'Kehabisan persediaan',
    'overview'              => 'Ikhtisar Cepat',
    'comment'               => 'Komen',
    'price_group'           => 'Klik lihat harga',
    'groups'                => 'Products group',
    'builds'                => 'Kelompok produk',
    'admin'                 => [
        'title'                   => 'Manajer produk',
        'create_success'          => 'Buat item sukses!',
        'edit_success'            => 'Edit sukses !',
        'list'                    => 'Daftar Produk',
        'action'                  => 'Action',
        'delete'                  => 'Hapus',
        'edit'                    => 'Edit',
        'add_new'                 => 'Tambah Baru',
        'add_new_title'           => 'Tambah produk baru',
        'add_new_des'             => 'Membuat Produk Baru',
        'export'                  => 'Ekspor',
        'refresh'                 => 'Segarkan',
        'select_kind'             => 'Pilih jenis produk',
        'result_item'             => 'Showing <b>:item_from</b> to <b>:item_to</b> of <b>:item_total</b> items</b>',
        'sort'                    => 'Jumlah',

        'select_category'         => 'Pilih Kategori',
        'select_product_in_group' => 'Pilih produk dalam grup',
        'select_product_in_build' => 'Pilih produk yang dibuat',
        'add_product'             => 'Tambahkan produk',
        'add_attribute'           => 'Tambahkan atribut',
        'add_attribute_place'     => 'Tambahkan nilai atribut',
        'add_sub_image'           => 'Tambahkan lebih banyak gambar',
        'add_product_promotion'   => 'Tambahkan harga promosi',
        'choose_image'            => 'Memilih',

        'sort_order'              => [
            'id_asc'     => 'ID asc',
            'id_desc'    => 'ID desc',
            'name_asc'   => 'Nama asc',
            'name_desc'  => 'Nama desc',
            'sku_asc'    => 'SKU a-z',
            'sku_desc'   => 'SKU z-a',
            'price_asc'  => 'Harga a-z',
            'price_desc' => 'Harga z-a',
        ],
        'search'                  => 'Pencarian',
        'search_place'            => 'Cari Nama, SKU atau ID',
        'cant_remove_child'        =>'Harap hapus daftar produk dari Builds atau Grup sebelum menghapusnya',
    ],
    'types'                 => [
        'normal' => 'Normal',
        'new'    => 'New',
        'hot'    => 'Hot',
    ],
    'kinds'                 => [
        'single' => 'Single',
        'build'  => 'Build',
        'group'  => 'Grup',
    ],
    'virtuals'              => [
        'physical'  => 'Physical',
        'download'  => 'Download',
        'only_view' => 'Hanya melihat',
        'service'   => 'Service',
    ],
];