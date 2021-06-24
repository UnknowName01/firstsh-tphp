-- phpMyAdmin SQL Dump
-- version 4.9.7deb1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 24, 2021 at 02:31 AM
-- Server version: 10.5.10-MariaDB-0ubuntu0.21.04.1
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `boyteDB`
--

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `date` timestamp NULL DEFAULT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`title`, `content`, `date`, `id`) VALUES
('Bình Dương: Công tác phòng chống dịch đặt ở mức cảnh báo cao nhất', 'Theo thông tin từ Trung tâm kiểm soát Bệnh tật (CDC) tỉnh Bình Dương, tính đến 19 giờ ngày 21/6, toàn tỉnh Bình Dương tích lũy có 154 trường hợp mắc COVID-19. Riêng trong ngày 21/6, Bình Dương đã ghi nhận thêm 21 trường hợp dương tính với SARS-CoV-2.  Nhiều ổ dịch đã được kiểm soát  CDC tỉnh Bình Dương cho biết, trong 21 trường hợp dương tính với SARS-CoV-2 được ghi nhận trong ngày 21/6, có 18 trường hợp liên quan đến ổ dịch phường Tân Phước Khánh, TX. Tân Uyên; 02 ca liên quan chợ đầu mối Hóc Môn; 01 ca là tài xế chở hàng tuyến Bắc-Nam (địa chỉ ở huyện Yên Mỹ, tỉnh Hưng Yên) được phát hiện khi có triệu chứng sốt, đến khám tại Trạm y tế Lai Uyên, huyện Bàu Bàng, tỉnh Bình Dương.', '2021-06-22 09:01:35', 1),
('Hưng Yên thêm 2 ca dương tính, có một thợ cắt tóc', 'Ghi nhận trong nước tại TP. Hồ Chí Minh (40), Bình Dương (23), Bắc Giang (8), Hưng Yên (4), Lào Cai (2), Long An (2), Bắc Kạn (1); trong đó 70 ca được phát hiện trong khu cách ly hoặc khu đã được phong toả.\r\n\r\n- 2 CA BỆNH (BN13783-BN13784) ghi nhận tại tỉnh Long An: là các trường hợp đã được cách ly, 1 ca là F1 của BN13531, 1 ca liên quan đến BN10784. Kết quả xét nghiệm ngày 22/6/2021 dương tính với SARS-CoV-2. Hiện đang cách ly, điều trị tại Bệnh viện Đa khoa khu vực Hậu Nghĩa và Bệnh viện Đa khoa Long An.\r\n\r\n- 4 CA BỆNH (BN13785-BN13788) ghi nhận tại tỉnh Hưng Yên: là các trường hợp F1, đã được cách ly. Kết quả xét nghiệm ngày 22-23/6/2021 dương tính với SARS-CoV-2. Hiện đang cách ly, điều trị tại Bệnh viện Bệnh Nhiệt đới Trung ương cơ sở Đông Anh.\r\n\r\n- 2 CA BỆNH (BN13789-BN13790) ghi nhận tại tỉnh Lào Cai: là F1 của BN12255, BN12540, đã được cách ly từ trước. Kết quả xét nghiệm lần 3 ngày 23/6/2021 dương tính với SARS-CoV-2. Hiện đang cách ly, điều trị tại Bệnh viện Đa khoa tỉnh Lào Cai.', '2021-06-23 10:43:43', 29),
('Từ 0h ngày 24/6, Hưng Yên mở rộng khu vực giãn cách xã hội ở huyện Yên Mỹ sau 8 ca mắc COVID-19', 'Đến nay, tỉnh Hưng Yên đã ghi nhận 45 ca mắc COVID-19, riêng tâm dịch huyện Yên Mỹ (Hưng Yên) đã có 8 ca. Địa phương đã quyết định mở rộng khu vực cách ly, 6 xã thực hiện giãn cách theo Chỉ thị 16 và 9 xã thực hiện Chỉ thị 15 từ 0 giờ ngày 24/6 cho tới khi có thông báo mới.\r\n\r\nNgày 23/6, 2 ca mắc mới liên quan đến quán cắt tóc gội đầu ở xã Trung Hưng, huyện Yên Mỹ, tỉnh Hưng Yên được Bộ Y tế công bố. Đó là BN13787, SN 2009 ở thôn Đạo Khê, xã Trung Hưng (là con của bệnh nhân Đ.T.Th – BN 13632) và BN13788 là anh N.V.B, SN 1989 ở thôn Mỹ Xá, xã Việt Cường là F1 của BN13632.\r\n\r\nTính đến chiều 23/6, tổng số ca bệnh ghi nhận tại huyện Yên Mỹ, tỉnh Hưng Yên là 8 ca tại 3 xã, thị trấn gồm xã: Thị trấn Yên Mỹ (4 ca), Trung Hưng (3 ca), xã Việt Cường (1 ca). Các ca phát sinh sau đó đều có nguồn lây từ 2 ca bệnh ghi nhận đầu tiên. Đó là BN13374 ở Thị trấn Yên Mỹ và BN13376 ở xã Trung Hưng là lái xe tuyến Bắc Nam khi đi từ vùng dịch về đã không khai báo y tế, không thực hiện các biện pháp y tế phòng dịch. Từ BN13374 đã lây cho 4 người trong gia đình là mẹ đẻ, chị gái và 2 con. BN13376 đi cắt tóc ngày 17/6 khi đang đang cấm hoạt động đã lây bệnh cho 3 người khác.\r\n\r\nTỉnh Hưng Yên đã khẩn trương truy vết kịp thời F1, F2 và cách ly theo quy định. Toàn tỉnh rà soát được 192 F1, hơn 800 F2, gần 1200 F3 ở Yên Mỹ và các huyện Khoái Châu, Văn Lâm, Văn Giang, TX Mỹ Hào và đã lấy mẫu xét nghiệm cho trên 2000 trường hợp có nguy cơ cao.\r\n\r\nTại cuộc họp trực tuyến triển khai các biện pháp ứng phó với dịch COVID-19 ở huyện Yên Mỹ hôm nay, lãnh đạo tỉnh Hưng Yên đã nhấn mạnh tình hình dịch mới cho thấy có tình trạng chủ quan, lơ là, thiếu trách nhiệm trong việc quản lý địa bàn. Một vài người thiếu trách nhiệm khiến cho toàn huyện phải gồng mình chống dịch. Đây là bài học đắt giá cần rút kinh nghiệm sâu sắc đối với tất cả các địa phương trong tỉnh.\r\n\r\nĐể ứng phó với tình hình dịch COVID-19 phức tạp, lãnh đạo tỉnh Hưng Yên yêu cầu rà soát, phân loại và lấy mẫu xét nghiệm cho toàn bộ lái xe, phụ xe đường dài trên địa bàn tỉnh. Các lái xe đi qua địa bàn vùng dịch được coi như là F2 phải được quản lý chặt chẽ, cách ly tại nhà trong vòng 21 ngày.\r\n\r\nSau khi phát hiện F0 truy vết triệt để các trường hợp F1 trong vòng 24 giờ, truy vết triệt để F2, F3 trong vòng 24 giờ tiếp theo. Trong khu cách ly đảm bảo giãn cách 2 người/ phòng cùng với đó huyện Yên mỹ cần chăm lo đời sống mọi mặt của người dân ở khu phong tỏa. Dừng hoạt động ăn uống vỉa hè tại 3 địa phương là Yên Mỹ, Văn Lâm, Thị xã Mỹ Hào.', '2021-06-23 16:35:21', 42),
('Trong 24 giờ, TP.HCM ghi nhận 152 ca mắc mới COVID-19', '152 trường hợp nhiễm mới chủ yếu đã được cách ly hoặc nằm trong khu vực phong tỏa, trong đó nhiều nhất là chuỗi ở khu chung cư Ehome 3 (13 ca) và chuỗi liên quan công ty Minh Thông Hóc Môn (13 ca).\r\n\r\nLiên tiếp trong 7 ngày qua, số ca mắc COVID-19 của TP.HCM vượt mốc 100. Cụ thể là 137 ca ngày 17/6, các ngày tiếp theo là 149; 135; 137; 166 ;136 và 152. Số ca mắc mới chiều nay là 101, đưa tổng số ca COVID-19 cộng đồng tại TP HCM trong đợt dịch này lên 2.072.\r\n\r\nTrung tâm Kiểm soát Bệnh tật TP.HCM (HCDC) cho hay, tính từ 6h đến 18h ngày 23/6, Thành phố ghi nhận thêm 101 trường hợp nhiễm mới đã được Bộ Y tế công bố. \r\n\r\nNhư vậy, tính từ 18h ngày 22/6 đến 18h ngày 23/6, TP.HCM ghi nhận 152 trường hợp nhiễm mới (BN13732-BN13782; BN13822-BNBN13861; BN13887-BN13947).\r\n\r\nSố ca mắc mới ngày hôm nay ở TP.HCM đa phần là các tiếp xúc đã được cách ly hoặc ở khu vực phong tỏa. 152 trường hợp nhiễm mới bao gồm 131 trường hợp là các tiếp xúc của các bệnh nhân được công bố từ trước và đã được cách ly hoặc nằm trong khu vực phong tỏa và 21 trường hợp phát hiện qua sàng lọc đang được điều tra dịch tễ.\r\n\r\nHiện tại, số ca của TP.HCM (2.072) đứng thứ hai cả nước, hiện chỉ sau Bắc Giang (5.469) và hơn Bắc Ninh (1.582).\r\n\r\n131 trường hợp tiếp xúc gồm có liên quan điểm nhóm Hội thánh truyền giáo Phục Hưng (2); liên quan BN13593 (3); liên quan BN12934 (2); liên quan BN10020 (1); liên quan BN13159 (2); liên quan BN9962 (1); liên quan BN10414 (2); chuỗi liên quan chợ đầu mối Hóc Môn (11); chuỗi liên quan Chợ Khu phố 2 Bình Tân (5); chuỗi Ehome 3 (13); chuỗi liên quan BN11300 (2); chuỗi công ty Kim Minh Quận 5 (10); chuỗi liên quan cửa hàng đồ gỗ ở Quận 12 - BN9827 (2), chuỗi Hnam Mobile (8); chuỗi liên quan BN10322 (1); liên quan BN13770 (1); chuỗi liên quan nhân viên UBND Quận 7 (7); liên quan tiểu thương chợ Kim Biên (2); chuỗi liên quan vựa ve chai Đề Thám Quận 1 (7); chuỗi xưởng cơ khí Hóc Môn (2); liên quan ấp Tân Thới 3 Hóc Môn (1); liên quan công ty nước đóng chai (4); liên quan BN6282 (1); liên quan BN10583 (1); liên quan BN12557 (3); liên quan BN13741-BN13742 (8); liên quan BN13164 (1); chuỗi liên quan BN9962 (7); chuỗi chung cư Phú Thọ Quận 11 (1); chuỗi liên quan công ty Minh Thông Hóc Môn (13); liên quan nhân viên Bệnh viện Bệnh viện Bệnh Nhiệt đới (1); liên quan BN12937 (2); tiếp xúc với bệnh nhân ở tỉnh khác (4).\r\n\r\n21 trường hợp phát hiện khi khám sàng lọc tại bệnh viện cư trú tại Quận 1 (4); Quận 4 (1); Quận 7 (1); Quận 8 (4), Quận 10 (4); TP. Thủ Đức KV2 (1); Phú Nhuận (1); Bình Tân (3); Quận 12 (2).\r\n\r\nCũng theo HCDC, từ 0 giờ ngày 20/6, Thành phố thực hiện chỉ thị 10 của UBND Thành phố. Theo chỉ thị này yêu cầu mọi người dân chỉ ra ngoài trong trường hợp thật sự cần thiết như mua lương thực, thực phẩm, thuốc men, cấp cứu, làm việc tại nhà máy, phân xưởng, xí nghiệp và các trường hợp khác theo hướng dẫn của ngành y tế như để lấy xét nghiệm SARS-CoV-2, tiêm vaccine phòng COVID-19... Thực hiện nghiêm các biện pháp phòng bệnh theo thông điệp 5K của Bộ Y tế khi ra khỏi nhà. Nếu biết mình có các yếu tố nguy cơ, cần liên hệ với các cơ sở y tế gần nhất để được trợ giúp.', '2021-06-23 16:35:59', 43),
('Thái Bình test nhanh ra 3 ca dương tính là tài xế xe khách Bắc - Nam', 'Ba trường hợp dương tính với SARS-CoV-2 là lái xe và phụ xe chạy tuyến Bắc - Nam được phát hiện qua xét nghiệm sàng lọc test nhanh.\r\n\r\nThông tin cho PV vào chiều tối nay (23/6), đại diện Trung tâm Kiểm soát Bệnh tật tỉnh Thái Bình cho biết, trên địa bàn vừa ghi nhận 3 trường hợp có kết quả xét nghiệm sàng lọc test nhanh dương tính với SARS-CoV-2 tại Bệnh viện Đa khoa Lâm Hoa.\r\n\r\nCác trường hợp có kết quả dương tính nói trên đều là nam giới gồm: công dân sinh năm 1996, trú tại xã Thanh Giang, huyện Thanh Miện (tỉnh Hải Dương); công dân sinh năm 1995, trú tại xã An Mỹ và công dân sinh năm 1982), trú tại xã An Cầu (cùng huyện Quỳnh Phụ, tỉnh Thái Bình). Những công dân nói trên là lái xe và phụ xe của một công ty vận tải chạy tuyến Bắc-Nam từ bến xe Vĩnh Bảo (TP. Hải Phòng) đến cây xăng số 47, ngã tư Bình Phước, quận Thủ Đức (TP. Hồ Chí Minh).\r\n\r\nNgày 19/6, xe khách này di chuyển từ TP. Hải Phòng đến TP. Hồ Chí Minh và có chở 6 hành khách. Đến khoảng 8h sáng 21/6, xe đi đến ngã tư Bình Phước (quận Thủ Đức, TP. Hồ Chí Minh) trả khách, khi trả khách xong xe quay lại và có chở 10 người.', '2021-06-23 16:36:40', 44);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`) VALUES
('admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
