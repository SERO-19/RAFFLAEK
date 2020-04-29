--
-- Table structure for table `tbl_product`
--

CREATE TABLE IF NOT EXISTS `tbl_product` (
  `p_id` int(11) NOT NULL,
  `p_name` varchar(200) CHARACTER SET utf8 COLLATE utf8_german2_ci NOT NULL,
  `p_detail` text CHARACTER SET utf8 NOT NULL,
  `p_img` varchar(200) CHARACTER SET utf8 DEFAULT NULL,
  `date_save` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='table product';

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_product`       
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`p_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT;