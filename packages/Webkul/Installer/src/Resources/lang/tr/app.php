<?php

return [
    'seeders' => [
        'attributes' => [
            'leads' => [
                'description'         => 'Açıklama',
                'expected-close-date' => 'Beklenen Kapanış Tarihi',
                'lead-value'          => 'Müşteri Adayı Değeri',
                'sales-owner'         => 'Satış Sahibi',
                'source'              => 'Kaynak',
                'title'               => 'Başlık',
                'type'                => 'Tür',
            ],

            'persons' => [
                'contact-numbers' => 'İletişim Numaraları',
                'emails'          => 'E-postalar',
                'job-title'       => 'İş Unvanı',
                'name'            => 'İsim',
                'organization'    => 'Organizasyon',
                'sales-owner'     => 'Satış Sahibi',
            ],

            'organizations' => [
                'address'     => 'Adres',
                'name'        => 'İsim',
                'sales-owner' => 'Satış Sahibi',
            ],

            'products' => [
                'description' => 'Açıklama',
                'name'        => 'İsim',
                'price'       => 'Fiyat',
                'quantity'    => 'Miktar',
                'sku'         => 'SKU',
            ],

            'quotes' => [
                'adjustment-amount' => 'Düzenleme Tutarı',
                'billing-address'   => 'Fatura Adresi',
                'description'       => 'Açıklama',
                'discount-amount'   => 'İndirim Tutarı',
                'discount-percent'  => 'İndirim Yüzdesi',
                'expired-at'        => 'Son Kullanma Tarihi',
                'grand-total'       => 'Genel Toplam',
                'person'            => 'Kişi',
                'sales-owner'       => 'Satış Sahibi',
                'shipping-address'  => 'Teslimat Adresi',
                'sub-total'         => 'Ara Toplam',
                'subject'           => 'Konu',
                'tax-amount'        => 'Vergi Tutarı',
            ],

            'warehouses' => [
                'contact-address' => 'İletişim Adresi',
                'contact-emails'  => 'İletişim E-postaları',
                'contact-name'    => 'İletişim Kişi Adı',
                'contact-numbers' => 'İletişim Numaraları',
                'description'     => 'Açıklama',
                'name'            => 'İsim',
            ],
        ],

        'email' => [
            'activity-created'      => 'Etkinlik oluşturuldu',
            'activity-modified'     => 'Etkinlik değiştirildi',
            'date'                  => 'Tarih',
            'new-activity'          => 'Yeni bir etkinliğiniz var, lütfen aşağıdaki detaylara bakın',
            'new-activity-modified' => 'Yeni bir etkinlik değiştirildi, lütfen aşağıdaki detaylara bakın',
            'participants'          => 'Katılımcılar',
            'title'                 => 'Başlık',
            'type'                  => 'Tür',
        ],

        'lead' => [
            'pipeline' => [
                'default' => 'Varsayılan Boru Hattı',

                'pipeline-stages' => [
                    'follow-up'   => 'Takip',
                    'lost'        => 'Kaybedildi',
                    'negotiation' => 'Müzakere',
                    'new'         => 'Yeni',
                    'prospect'    => 'Olası Müşteri',
                    'won'         => 'Kazanıldı',
                ],
            ],

            'source' => [
                'direct'   => 'Doğrudan',
                'email'    => 'E-posta',
                'phone'    => 'Telefon',
                'web'      => 'Web',
                'web-form' => 'Web Formu',
            ],

            'type' => [
                'existing-business' => 'Mevcut İş',
                'new-business'      => 'Yeni İş',
            ],
        ],

        'user' => [
            'role' => [
                'administrator-role' => 'Yönetici Rolü',
                'administrator'      => 'Yönetici',
            ],
        ],

        'workflow' => [
            'email-to-participants-after-activity-updation' => 'Etkinlik güncellemesinden sonra katılımcılara e-posta gönderme',
            'email-to-participants-after-activity-creation' => 'Etkinlik oluşturulmasından sonra katılımcılara e-posta gönderme',
        ],
    ],

    'installer' => [
        'index' => [
            'create-administrator' => [
                'admin'            => 'Yönetici',
                'krayin'          => 'Krayin',
                'confirm-password' => 'Şifreyi Onayla',
                'email'            => 'E-posta',
                'email-address'    => 'admin@ornek.com',
                'password'         => 'Şifre',
                'title'            => 'Yönetici Oluştur',
            ],

            'environment-configuration' => [
                'algerian-dinar'              => 'Cezayir Dinarı (DZD)',
                'allowed-currencies'          => 'İzin Verilen Para Birimleri',
                'allowed-locales'             => 'İzin Verilen Lokaller',
                'application-name'            => 'Uygulama Adı',
                'argentine-peso'              => 'Arjantin Pezosu (ARS)',
                'australian-dollar'           => 'Avustralya Doları (AUD)',
                'krayin'                     => 'Krayin',
                'bangladeshi-taka'            => 'Bangladeş Takası (BDT)',
                'brazilian-real'              => 'Brezilya Reali (BRL)',
                'british-pound-sterling'      => 'İngiliz Sterlini (GBP)',
                'canadian-dollar'             => 'Kanada Doları (CAD)',
                'cfa-franc-bceao'             => 'CFA Frank BCEAO (XOF)',
                'cfa-franc-beac'              => 'CFA Frank BEAC (XAF)',
                'chilean-peso'                => 'Şili Pesosu (CLP)',
                'chinese-yuan'                => 'Çin Yuanı (CNY)',
                'colombian-peso'              => 'Kolombiya Pesosu (COP)',
                'czech-koruna'                => 'Çek Korunası (CZK)',
                'danish-krone'                => 'Danimarka Kronu (DKK)',
                'database-connection'         => 'Veritabanı Bağlantısı',
                'database-hostname'           => 'Veritabanı Sunucu Adı',
                'database-name'               => 'Veritabanı Adı',
                'database-password'           => 'Veritabanı Parolası',
                'database-port'               => 'Veritabanı Bağlantı Noktası',
                'database-prefix'             => 'Veritabanı Öneki',
                'database-username'           => 'Veritabanı Kullanıcı Adı',
                'default-currency'            => 'Varsayılan Para Birimi',
                'default-locale'              => 'Varsayılan Lokal',
                'default-timezone'            => 'Varsayılan Zaman Dilimi',
                'default-url'                 => 'Varsayılan URL',
                'default-url-link'            => 'https://localhost',
                'egyptian-pound'              => 'Mısır Lirası (EGP)',
                'euro'                        => 'Euro (EUR)',
                'fijian-dollar'               => 'Fiji Doları (FJD)',
                'hong-kong-dollar'            => 'Hong Kong Doları (HKD)',
                'hungarian-forint'            => 'Macar Forinti (HUF)',
                'indian-rupee'                => 'Hint Rupisi (INR)',
                'indonesian-rupiah'           => 'Endonezya Rupisi (IDR)',
                'israeli-new-shekel'          => 'İsrail Yeni Şekeli (ILS)',
                'japanese-yen'                => 'Japon Yeni (JPY)',
                'jordanian-dinar'             => 'Ürdün Dinarı (JOD)',
                'kazakhstani-tenge'           => 'Kazakistan Tengesi (KZT)',
                'kuwaiti-dinar'               => 'Kuveyt Dinarı (KWD)',
                'lebanese-pound'              => 'Lübnan Lirası (LBP)',
                'libyan-dinar'                => 'Libya Dinarı (LYD)',
                'malaysian-ringgit'           => 'Malezya Ringiti (MYR)',
                'mauritian-rupee'             => 'Mauritius Rupisi (MUR)',
                'mexican-peso'                => 'Meksika Pesosu (MXN)',
                'moroccan-dirham'             => 'Fas Dirhemi (MAD)',
                'mysql'                       => 'MySQL',
                'nepalese-rupee'              => 'Nepal Rupisi (NPR)',
                'new-taiwan-dollar'           => 'Yeni Tayvan Doları (TWD)',
                'new-zealand-dollar'          => 'Yeni Zelanda Doları (NZD)',
                'nigerian-naira'              => 'Nijerya Nairası (NGN)',
                'norwegian-krone'             => 'Norveç Kronu (NOK)',
                'omani-rial'                  => 'Umman Riyali (OMR)',
                'pakistani-rupee'             => 'Pakistan Rupisi (PKR)',
                'panamanian-balboa'           => 'Panama Balboası (PAB)',
                'paraguayan-guarani'          => 'Paraguay Guaranisi (PYG)',
                'peruvian-nuevo-sol'          => 'Peru Nuevo Solu (PEN)',
                'pgsql'                       => 'PgSQL',
                'philippine-peso'             => 'Filipinler Pesosu (PHP)',
                'polish-zloty'                => 'Polonya Zlotisi (PLN)',
                'qatari-rial'                 => 'Katar Riyali (QAR)',
                'romanian-leu'                => 'Romanya Leyi (RON)',
                'russian-ruble'               => 'Rus Rublesi (RUB)',
                'saudi-riyal'                 => 'Suudi Riyali (SAR)',
                'select-timezone'             => 'Zaman Dilimi Seç',
                'singapore-dollar'            => 'Singapur Doları (SGD)',
                'south-african-rand'          => 'Güney Afrika Randı (ZAR)',
                'south-korean-won'            => 'Güney Kore Wonu (KRW)',
                'sqlsrv'                      => 'SQLSRV',
                'sri-lankan-rupee'            => 'Sri Lanka Rupisi (LKR)',
                'swedish-krona'               => 'İsveç Kronu (SEK)',
                'swiss-franc'                 => 'İsviçre Frangı (CHF)',
                'thai-baht'                   => 'Tayland Bahtı (THB)',
                'title'                       => 'Mağaza Yapılandırması',
                'tunisian-dinar'              => 'Tunus Dinarı (TND)',
                'turkish-lira'                => 'Türk Lirası (TRY)',
                'ukrainian-hryvnia'           => 'Ukrayna Grivnası (UAH)',
                'united-arab-emirates-dirham' => 'Birleşik Arap Emirlikleri Dirhemi (AED)',
                'united-states-dollar'        => 'Amerikan Doları (USD)',
                'uzbekistani-som'             => 'Özbekistan Somu (UZS)',
                'venezuelan-bolívar'          => 'Venezuela Bolivarı (VEF)',
                'vietnamese-dong'             => 'Vietnam Dongu (VND)',
                'warning-message'             => 'Dikkat! Varsayılan sistem dili ve varsayılan para birimi ayarları kalıcıdır ve bir kez ayarlandığında değiştirilemez.',
                'zambian-kwacha'              => 'Zambiya Kvaçası (ZMW)',
            ],

            'installation-processing' => [
                'krayin'      => 'Krayin Kurulumu',
                'krayin-info' => 'Veritabanı tabloları oluşturuluyor, bu birkaç dakika sürebilir',
                'title'        => 'Kurulum',
            ],

            'installation-completed' => [
                'admin-panel'                => 'Yönetici Paneli',
                'krayin-forums'             => 'Krayin Forumu',
                'customer-panel'             => 'Müşteri Paneli',
                'explore-krayin-extensions' => 'Krayin Uzantılarını Keşfedin',
                'title'                      => 'Kurulum Tamamlandı',
                'title-info'                 => 'Krayin sisteminize başarıyla kuruldu.',
            ],

            'ready-for-installation' => [
                'create-databsae-table'   => 'Veritabanı tablosu oluştur',
                'install'                 => 'Yükleme',
                'install-info'            => 'Kurulum için Krayin',
                'install-info-button'     => 'Aşağıdaki düğmeye tıklayın',
                'populate-database-table' => 'Veritabanı tablolarını doldur',
                'start-installation'      => 'Kurulumu Başlat',
                'title'                   => 'Kurulum için Hazır',
            ],

            'start' => [
                'locale'        => 'Yerel',
                'main'          => 'Başlangıç',
                'select-locale' => 'Yerel Seçin',
                'title'         => 'Krayin kurulumunuz',
                'welcome-title' => 'Krayin\'ya hoş geldiniz',
            ],

            'server-requirements' => [
                'calendar'    => 'Takvim',
                'ctype'       => 'cType',
                'curl'        => 'cURL',
                'dom'         => 'dom',
                'fileinfo'    => 'Dosya Bilgisi',
                'filter'      => 'Filtre',
                'gd'          => 'GD',
                'hash'        => 'Hash',
                'intl'        => 'intl',
                'json'        => 'JSON',
                'mbstring'    => 'mbstring',
                'openssl'     => 'openssl',
                'pcre'        => 'pcre',
                'pdo'         => 'pdo',
                'php'         => 'PHP',
                'php-version' => '8.1 veya üstü',
                'session'     => 'oturum',
                'title'       => 'Sunucu Gereksinimleri',
                'tokenizer'   => 'tokenizer',
                'xml'         => 'XML',
            ],

            'arabic'                   => 'Arapça',
            'back'                     => 'Geri',
            'krayin'                  => 'Krayin',
            'krayin-info'             => 'Webkul tarafından geliştirilen bir Topluluk Projesi',
            'krayin-logo'             => 'Krayin Logosu',
            'bengali'                  => 'Bengalce',
            'chinese'                  => 'Çince',
            'continue'                 => 'Devam Et',
            'dutch'                    => 'Hollandaca',
            'english'                  => 'İngilizce',
            'french'                   => 'Fransızca',
            'german'                   => 'Almanca',
            'hebrew'                   => 'İbranice',
            'hindi'                    => 'Hintçe',
            'installation-description' => 'Krayin kurulumu genellikle birkaç adım içerir. İşte Krayin\'nun kurulum sürecine genel bir bakış',
            'installation-info'        => 'Sizi burada görmekten mutluluk duyuyoruz!',
            'installation-title'       => 'Kurulum\'a Hoş Geldiniz',
            'italian'                  => 'İtalyanca',
            'japanese'                 => 'Japonca',
            'persian'                  => 'Farsça',
            'polish'                   => 'Lehçe',
            'portuguese'               => 'Brezilya Portekizcesi',
            'russian'                  => 'Rusça',
            'sinhala'                  => 'Sinhala',
            'spanish'                  => 'İspanyolca',
            'title'                    => 'Krayin Kurulum Sihirbazı',
            'turkish'                  => 'Türkçe',
            'ukrainian'                => 'Ukraynaca',
            'webkul'                   => 'Webkul',
        ],
    ],
];
