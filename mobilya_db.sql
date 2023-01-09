-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 09 Oca 2023, 15:20:45
-- Sunucu sürümü: 10.4.17-MariaDB
-- PHP Sürümü: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `mobilya_db`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `adresler`
--

CREATE TABLE `adresler` (
  `id` int(11) NOT NULL,
  `sehirId` int(11) NOT NULL,
  `ilce` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cadde` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mahalle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sokak` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `binaNo` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `daireNo` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `adresler`
--

INSERT INTO `adresler` (`id`, `sehirId`, `ilce`, `cadde`, `mahalle`, `sokak`, `binaNo`, `daireNo`) VALUES
(82, 6, 'pendik', 'Barbaros Caddesi', 'Kaynarca Mahallesi', 'Serhat Sokak', '34', '7'),
(86, 6, 'pendik', 'Barbaros Caddesi', 'Kaynarca Mahallesi', 'Serhat Sokak', '34', '7'),
(87, 6, 'pendik', 'Barbaros Caddesi', 'Kaynarca Mahallesi', 'Serhat Sokak', '34', '7'),
(88, 6, 'pendik', 'Barbaros Caddesi', 'Kaynarca Mahallesi', 'Serhat Sokak', '34', '7'),
(89, 6, 'pendik', 'Barbaros Caddesi', 'Kaynarca Mahallesi', 'Serhat Sokak', '34', '7'),
(90, 16, 'sasaa', 'es', 'esne', 'es', '23', '12'),
(91, 6, 'qwe', 'asd', 'asdf', 'asd', '1', '12'),
(92, 34, 'Kartal', 'yok', 'Karliktepe Mah', 'Ekim Sokak', '38', '16'),
(93, 6, 'pendik', 'Barbaros Caddesi', 'Kaynarca Mahallesi', 'Serhat Sokak', '34', '7'),
(94, 6, 'pendik', 'Barbaros Caddesi', 'Kaynarca Mahallesi', 'Serhat Sokak', '34', '7'),
(95, 6, 'pendik', 'Barbaros Caddesi', 'Kaynarca Mahallesi', 'Serhat Sokak', '34', '7');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanicilar`
--

CREATE TABLE `kullanicilar` (
  `id` int(11) NOT NULL,
  `tcNo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `isim` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `soyisim` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefon` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dogumTarihi` date DEFAULT NULL,
  `eMail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sifre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adresId` int(11) DEFAULT NULL,
  `aktif` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `kullanicilar`
--

INSERT INTO `kullanicilar` (`id`, `tcNo`, `isim`, `soyisim`, `telefon`, `dogumTarihi`, `eMail`, `sifre`, `adresId`, `aktif`) VALUES
(17, '1234563131', 'Yakup Yasin', 'Akdingh', '05314284050', '2001-07-16', '1@kocaeli.edu.tr', 'c4ca4238a0b923820dcc509a6f75849b', 82, 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sehirler`
--

CREATE TABLE `sehirler` (
  `plakaKodu` int(11) NOT NULL,
  `isim` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `sehirler`
--

INSERT INTO `sehirler` (`plakaKodu`, `isim`) VALUES
(1, 'adana'),
(2, 'adıyaman'),
(6, 'Ankara'),
(16, 'Bursa'),
(34, 'istanbul'),
(41, 'kocaeli'),
(53, 'Rize'),
(54, 'Sakarya'),
(55, 'Samsun'),
(77, 'Yalova'),
(81, 'Düzce');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `urunler`
--

CREATE TABLE `urunler` (
  `id` int(11) NOT NULL,
  `ad` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fiyat` bigint(20) NOT NULL,
  `stokAdet` int(11) NOT NULL,
  `resimUrl` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `aciklama` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `aktif` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `urunler`
--

INSERT INTO `urunler` (`id`, `ad`, `fiyat`, `stokAdet`, `resimUrl`, `aciklama`, `aktif`) VALUES
(35, 'Bella Mini Koltuk Takımı', 9900, 45, 'img/items/koltuk-1.jpg', 'Bella mini koltuk takımının, özgün zarif şık tasarımı, mükemmel renk kontrast geçişleri ve modern lüks çizgileri sayesinde yaşam alanlarınızda rahat ve keyifle bir vakit geçirebilmenizi sağlıyor. Ürüne özel tasarlanan gold ve metal detaylar ile zevkinizi yansıtmak çok kolay. Üçlü ünitenin sırt bölümünün genişlemesi ile rahat ve şık bir koltuk oturumu sağlanmış. Sehpa olarak da kullanılan sırt bölmesi minimal eşya kullanımını da destekliyor. Aynı zamanda mermer efekti ile yine tarzınızı yansıtmanıza yardımcı oluyor. Bella mini koltuk takımı yüksek ayak özelliği ile temizlik işlerinizi kolaylaştırıyor. Aynı zamanda yatak olabilen üçlü  koltuk takımı ile misafirlerinizi rahatça ağırlama konforuna da sahip olacaksın.', 1),
(38, 'Avrupa Mini Koltuk Takımı', 9990, 15, 'img/items/koltuk-2.jpg', 'Avrupa mini Koltuk takımı farklı renk seçenekleri, rahatlık ve şıklığı birleştiren tasarımı ile salonlarınızdaki yerini bekliyor. Aynı zamanda yatak olabilen üçlü  koltuk  ile misafirlerinizi rahatça ağırlama konforuna da sahip olacaksın. Avrupa mini koltuk takımına internet sitemizden ve mağazalarımızdan ulaşabilirsin.', 1),
(39, 'Bendis Midi Koltuk Takımı', 167000, 80, 'img/items/koltuk-3.jpg', 'Rahatlığın zirveye taşındığı bir koltuk takımı ile karşınızdayız. Sağladığı konforu yanı sıra spor tarzı ile Bendis koltuk takımı tarzınızı yansıtmanıza yardımcı olacak. Ürünümüze isterseniz internet sitemiz aracılığıyla isterseniz de mağazalarımız aracılığı ile ulaşabilirsiniz.', 1),
(40, 'Cross Mini Koltuk Takımı', 12900, 80, 'img/items/koltuk-4.jpg', 'Cross mini koltuk takımı keskin sınırlardan uzak yalın tasarımı ile sadeliği ve şıklığı bir araya getirdi. Rahatlık mottosundan yola çıkılarak tasarlanan Cross üçlü koltuğun genişleyen sırt bölgesi ile film keyfinizi konforlu hale getirdik. Yine minimal eşya kullanımını destekleyen üçlü koltuk yatak olma özelliği ile misafirlerimizi nerede ağırlayacağız sorununu ortadan kaldırıyor. Cross mini koltuk takımının yüksek ayak özelliği ve kolay temizlenebilir kumaşı ile temizlik yapmak keyifli hale geliyor. Cross mini koltuk takımının rahatlığına ve zarafetine mağazalarımız ve internet sitemiz üzerinden ulaşmak çok kolay.', 1),
(41, 'Star Mini Koltuk Takımı', 7390, 900, 'img/items/koltuk-5.jpg', 'Minimal eşya kullanımı destekleyen ürünleri tercih ediyorum. Evimde fazla yer kaplamayacak aynı zamanda da tüm zamanlara hitap edebilecek özelliklere sahip bir koltuk takımına ihtiyacım var diyorsanız Star mini koltuk takımı tam olarak size göre. Az yer kaplaması, hem üçlü hemde ikili koltuğun, yatak ve baza özelliği ile minimal eşya kullanımı destekleyen bir yapısı var. bununla birlikte seni yormadan temizlik imkanı sunan yüksek ayak özelliği ile tam sana göre. Modası hiçbir dönemde geçmeyen ve farklı renk seçenekleri sunan star mini koltuk takımı ile tanışmak için seni mağazalarımıza ve internet sitemize bekliyoruz.', 1),
(42, 'Bianco Mini Koltuk Takımı', 9900, 100, 'img/items/koltuk-6.jpg', 'Bianco koltuk takımı opsiyonel kullanımı ile öne çıkmaktadır. Hem üçlü hemde ikili koltuğun yatak ve sandıklı kullanımı ile koltuk takımından beklentinin çok önüne geçiyor. Özel el işçiliği ile senin için tasarlanan Bianco mini koltuk takımı yüksek ayak ve kolay temizlenebilir kumaşı ve farklı renk seçenekleri ile seni mağazalarda ve internet sitesinde bekliyor.', 1),
(43, 'Veyron Mini Koltuk Takımı', 15634, 250, 'img/items/koltuk-7.jpg', 'Gümüş asaletine inananlardansan seni bu tarafa alalım. Gümüş krom uygulamasının mükemmel uyumunu Veyron mini koltuk takımının iki renk seçeneğinde de görmek mümkün. Bu asalet tek başına beni tatmin etmez, başka neler var mı dedin? Veyron mini koltuk takımının sandığı ile evinde yeni depolama alanı açarsın, hem üçlü hem de ikili koltuğun sırt bölmesindeki genişleme ile hem yeni bir yatağa hem de yeni bir sehpaya sahip olacaksın... dur dur! Unutmadan söyleyeyim; yüksek ayak, kolay silinebilir kumaş da var... daha ne olsun ama değil mi? Haydi şimdi mağazadan ya da internet sitesinden Veyron mini koltuk takımı ile tanışma zamanı.', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yonetici`
--

CREATE TABLE `yonetici` (
  `id` int(11) NOT NULL,
  `tcNo` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ad` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `soyad` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `eMail` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sifre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `yonetici`
--

INSERT INTO `yonetici` (`id`, `tcNo`, `ad`, `soyad`, `eMail`, `sifre`) VALUES
(1, '29390112319', 'Yakup Yasin', 'Akdin', 'admin@kocaeli.edu.tr', '202cb962ac59075b964b07152d234b70');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `adresler`
--
ALTER TABLE `adresler`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sehirFK` (`sehirId`);

--
-- Tablo için indeksler `kullanicilar`
--
ALTER TABLE `kullanicilar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `adresFK` (`adresId`);

--
-- Tablo için indeksler `sehirler`
--
ALTER TABLE `sehirler`
  ADD PRIMARY KEY (`plakaKodu`);

--
-- Tablo için indeksler `urunler`
--
ALTER TABLE `urunler`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `yonetici`
--
ALTER TABLE `yonetici`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `adresler`
--
ALTER TABLE `adresler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- Tablo için AUTO_INCREMENT değeri `kullanicilar`
--
ALTER TABLE `kullanicilar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- Tablo için AUTO_INCREMENT değeri `urunler`
--
ALTER TABLE `urunler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `adresler`
--
ALTER TABLE `adresler`
  ADD CONSTRAINT `sehirFK` FOREIGN KEY (`sehirId`) REFERENCES `sehirler` (`plakaKodu`);

--
-- Tablo kısıtlamaları `kullanicilar`
--
ALTER TABLE `kullanicilar`
  ADD CONSTRAINT `adresFK` FOREIGN KEY (`adresId`) REFERENCES `adresler` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
