<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
     */

    'accepted'             => 'Atribut: harus diterima.',
    'active_url'           => 'Atribut: bukan URL yang valid.',
    'after'                => 'Atribut: harus tanggal setelah: tanggal. ',
    'after_or_equal'       => 'Atribut: harus tanggal setelah atau sama dengan: tanggal. ',
    'alpha'                => 'Atribut: hanya dapat berisi huruf.',
    'alpha_dash'           => 'Atribut: hanya dapat berisi huruf, angka, dan tanda hubung. ',
    'alpha_num'            => 'Atribut: hanya dapat berisi huruf dan angka.',
    'array'                => 'Atribut: harus berupa array.',
    'before'               => 'Atribut: harus tanggal sebelum: tanggal.',
    'before_or_equal'      => 'Atribut: harus tanggal sebelum atau sama dengan: tanggal.',
    'between'              => [
        'numeric' => 'Atribut: harus antara: min dan: maks. ',
        'file'    => 'Atribut: harus antara: min dan: maks kilobyte.',
        'string'  => 'Atribut: harus antara: min dan: karakter maks.',
        'array'   => 'Atribut: harus memiliki antara: min dan: item maks. ',
    ],
    'boolean'              => 'Bidang: atribut harus benar atau salah. ',
    'confirmed'            => 'The: konfirmasi atribut tidak cocok.',
    'date'                 => 'Atribut: bukan tanggal yang valid. ',
    'date_format'          => 'Atribut: tidak cocok dengan format: format.',
    'different'            => 'Atribut: dan: lainnya harus berbeda.',
    'digits'               =>'Atribut: harus: digit digit.',
    'digits_between'       => 'Atribut: harus antara: min dan: digit maksimum.',
    'dimensions'           => 'Atribut: memiliki dimensi gambar tidak valid. ',
    'distinct'             => 'Bidang: atribut memiliki nilai duplikat. ',
    'email'                => 'Atribut: harus alamat email yang valid.',
    'phone'                => 'Ponsel Anda tidak dalam format yang benar !.',
    'exists'               => 'Atribut yang dipilih: tidak valid.',
    'file'                 => 'Atribut: harus berupa file. ',
    'filled'               => 'Bidang: atribut harus memiliki nilai.',
    'gt'                   => [
        'numeric' => 'Atribut: harus lebih besar dari: nilai.',
        'file'    => 'Atribut: harus lebih besar dari: value kilobyte.',
        'string'  => 'Atribut: harus lebih besar dari: karakter nilai',
        'array'   => 'Atribut: harus memiliki lebih dari: item nilai.',
    ],
    'gte'                  => [
        'numeric' => 'Atribut: harus lebih besar dari atau sama dengan: nilai.',
        'file'    => 'Atribut: harus lebih besar dari atau sama dengan: nilai kilobyte.',
        'string'  => 'Atribut: harus lebih besar dari atau sama dengan: karakter nilai.',
        'array'   => 'Atribut: harus memiliki: item nilai atau lebih. ',

    ],
    'image'                => 'Atribut: harus berupa gambar.',
    'in'                   => 'Atribut yang dipilih: tidak valid.',
    'in_array'             => 'Bidang: atribut tidak ada di: other. ',
    'integer'              => 'Atribut: harus berupa bilangan bulat. ',
    'ip'                   => 'Atribut: harus berupa alamat IP yang valid. ',
    'ipv4'                 => 'Atribut: harus alamat IPv4 yang valid.',
    'ipv6'                 =>'Atribut: harus alamat IPv6 yang valid.',
    'json'                 => 'Atribut: harus berupa string JSON yang valid.',
    'lt'                   => [
        'numeric' => 'Atribut: harus lebih kecil dari: nilai. ',
        'file'    => 'Atribut: harus kurang dari: value kilobytes. ',
        'string'  => 'Atribut: harus kurang dari: karakter nilai. ',
        'array'   => 'Atribut: harus memiliki kurang dari: item nilai. ',
    ],
    'lte'                  => [
        'numeric' => 'Atribut: harus kurang dari atau sama dengan: nilai. ',
        'file'    => 'Atribut: harus kurang dari atau sama: nilai kilobyte.',
        'string'  => 'Atribut: harus kurang dari atau sama: karakter nilai.',
        'array'   => 'Atribut: tidak boleh memiliki lebih dari: item nilai. ',
    ],
    'max'                  => [
        'numeric' => 'Atribut: mungkin tidak lebih besar dari: maks.',
        'file'    => 'Atribut: mungkin tidak lebih besar dari: maks kilobyte.',
        'string'  => 'Atribut: mungkin tidak lebih besar dari: karakter maks.',
        'array'   => 'Atribut: mungkin tidak memiliki lebih dari: item maks.',
    ],
    'mimes'                => 'Atribut: harus berupa file type:: values. ',
    'mimetypes'            => 'Atribut: harus berupa file bertipe:: values.',
    'min'                  => [
        'numeric' => 'Atribut: setidaknya harus: min. ',
        'file'    => 'Atribut: setidaknya harus: min kilobyte.',
        'string'  => 'Atribut: setidaknya harus: karakter min. ',
        'array'   => 'Atribut: setidaknya harus memiliki: item minimal. ',
    ],
    'not_in'               => 'Atribut yang dipilih: tidak valid.',
    'not_regex'            => 'Format: atribut tidak valid. ',
    'numeric'              => 'Atribut: harus berupa angka. ',
    'present'              => 'bidang: atribut harus ada. ',
    'regex'                => 'Format: atribut tidak valid. ',
    'required'             => 'Bidang atribut diperlukan.',
    'required_if'          => 'Bidang: atribut diperlukan ketika: lainnya adalah: nilai. ',
    'required_unless'      => 'Kolom atribut: diperlukan kecuali: yang lain di: nilai.',
    'required_with'        => 'Bidang: atribut diperlukan ketika: nilai ada. ',
    'required_with_all'    => 'Bidang: atribut diperlukan ketika: nilai ada. ',
    'required_without'     => 'Kolom atribut: diperlukan ketika: nilai tidak ada.',
    'required_without_all' => 'Bidang atribut: diperlukan ketika tidak ada: nilai ada.',
    'same'                 => 'Atribut: dan: lainnya harus cocok.',
    'size'                 => [
        'numeric' => 'Atribut: harus: size.',
        'file'    => 'Atribut: harus: size kilobytes.',
        'string'  => 'Atribut: harus: karakter ukuran.',
        'array'   => 'Atribut: harus berisi: item ukuran.',
    ],
    'string'               => 'Atribut: harus berupa string. ',
    'timezone'             => 'Atribut: harus merupakan zona yang valid. ',
    'unique'               => 'Atribut: telah diambil.',
    'uploaded'             => 'Atribut: gagal diunggah.',
    'url'                  => 'Format atribut: tidak valid.',
    'validate_nickname'    => 'Bidang ini harus satu-satunya. Hanya gunakan a-z dan 0-9. ',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
     */

    'custom'               => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
     */

    'attributes'           => [],

];
