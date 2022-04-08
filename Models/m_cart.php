<?php
 require_once('database.php');
 class M_khach_hang extends database {
     function khach_hang_hoa_don() {
         $query = 'SELECT hd.so_hoa_don,ngay_hd, kh.ma_khach_hang, ten_khach_hang, dia_chi, dien_thoai,email, tri_gia, san_pham.ma_san_pham, ten_san_pham, so_luong,san_pham.don_gia, san_pham.don_gia*so_luong as thanh_tien, hinh FROM hoa_don hd, khach_hang kh, san_pham, ct_hoa_don ct WHERE hd.so_hoa_don = ct.so_hoa_don AND hd.ma_khach_hang = kh.ma_khach_hang AND ct.ma_san_pham = san_pham.ma_san_pham Order by kh.ma_khach_hang';
         $this->setQuery($query);
         $khachhangs=$this->loadAllRows();
         $mang=array();
         foreach($khachhangs as $row)
         {
             $mang[]=$row;
         }
         return $mang;
     }
     /*`ma_khach_hang`, `ten_khach_hang`, `phai`, `ngay_sinh`, `dia_chi`, `dien_thoai`, `email`*/
     function themKhachHang($ten_khach_hang,$phai,$ngay_sinh,$dia_chi,$dien_thoai,$email,$ghi_chu) {
         $query = "INSERT INTO khach_hang(ten_khach_hang,phai,ngay_sinh,dia_chi,dien_thoai,email,ghi_chu) ";
         $query.= "VALUES(?,?,?,?,?,?,?)";
         $this->setQuery($query);
         function themKhachHang($ten_khach_hang,$phai,$ngay_sinh,$dia_chi,$dien_thoai,$email,$ghi_chu) {
             $query = "INSERT INTO khach_hang(ten_khach_hang,phai,ngay_sinh,dia_chi,dien_thoai,email,ghi_chu) ";
             $query.= "VALUES(?,?,?,?,?,?,?)";
             $this->setQuery($query);
             $result = $this->execute(array($ten_khach_hang,$phai,$ngay_sinh,$dia_chi,$dien_thoai,$email,$ghi_chu));
             if($result)
                 return $this->getLastId();  //If query execute successful, the system will return lastID in table khach_hang
             else
 
                 return false;
         }   $result = $this->execute(array($ten_khach_hang,$phai,$ngay_sinh,$dia_chi,$dien_thoai,$email,$ghi_chu));
         if($result)
             return $this->getLastId();  //If query execute successful, the system will return lastID in table khach_hang
         else
 
             return false;
     }
     /*`so_hoa_don`, `ngay_hd`, `ma_khach_hang`, `tri_gia`, `hinh_thuc_thanh_toan`, `tinh_trang`*/
     function themHoaDon($ngay_hd, $ma_khach_hang, $tri_gia, $hinh_thuc_thanh_toan) {
         $query = "INSERT INTO hoa_don(ngay_hd,ma_khach_hang,tri_gia,hinh_thuc_thanh_toan) VALUES(?,?,?,?)";
         $this->setQuery($query);
         $result = $this->execute(array($ngay_hd, $ma_khach_hang, $tri_gia, $hinh_thuc_thanh_toan));
         if($result)
             return $this->getLastId();
         else
             return false;
     }
 /*`so_hoa_don`, `ma_san_pham`, `so_luong`, `don_gia`, `stt`*/
     function themChiTietHoaDon($so_hoa_don,$ma_san_pham,$so_luong,$don_gia) {
         $query = "INSERT INTO ct_hoa_don(so_hoa_don,ma_san_pham,so_luong,don_gia) VALUES(?,?,?,?)";
         $this->setQuery($query);
         $this->execute(array($so_hoa_don,$ma_san_pham,$so_luong,$don_gia));
     }
 
     function capNhatDonGia_sp($ma_san_pham) {
         $query = "UPDATE ct_hoa_don ";
         $query.= "SET don_gia = (SELECT don_gia FROM san_pham WHERE ct_hoa_don.ma_san_pham = san_pham.ma_san_pham) ";
         $query.= "WHERE  so_hoa_don = ?";
         $this->setQuery($query);
         $this->execute(array($ma_san_pham));
     }
 
 /*`so_hoa_don`, `ngay_hd`, `ma_khach_hang`, `tri_gia`, `hinh_thuc_thanh_toan`, `tinh_trang`*/
 
     function capNhatTongTien($so_hoa_don)
     {
         $query = "UPDATE hoa_don ";
         $query.= "SET tri_gia = (SELECT SUM( so_luong * don_gia ) AS tt FROM ct_hoa_don WHERE ct_hoa_don.so_hoa_don = hoa_don.so_hoa_don) ";
         $query.= "WHERE so_hoa_don = ?";
         $this->setQuery($query);
         $this->execute(array($so_hoa_don));
     }
 
 
 }
 ?>