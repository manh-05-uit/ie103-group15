CREATE TABLE SinhVien(
	MaSV char(9) NOT NULL,
	TenSV char(50) NULL,
	NamSinh int NULL,
	KhoaDT varchar(6) NULL,
	MaKhoa varchar(6) NULL,
	MaNganh varchar(11) NULL,
	constraint pk_sinhvien primary key (MaSV)
);

insert into SinhVien
values
('11110001','Nguyen Van Ba','2005','K18','ISE','KHDL'),
('11110002','Tran Van Duy','2005','K18','CS','KHMT'),
('11110003','Le Tan Thanh','2004','K17','NC','MMTTT'),
('11110004','Nguyen Thanh Tam','2005','K18','SE','KTPM'),
('11110005','Pham Truc','2005','K18','SE','KTPM'),
('11110006','Ho Dac Chi','2005','K18','CE','KTMT'),
('11110007','Pham Huy Hoang','2004','K17','NC','ATTT'),
('11110008','Vo Van Quy','2003','K16','IS','HTTT'),
('11110009','Le Thuy','2004','K17','CS','KHMT'),
('11110010','Duong Van Viet','2005','K18','ISE','KHDL'),
('11110011','Truong Tuan','2005','K18','ISE','CNTT'),
('11110012','Nguyen Thanh Thao','2004','K17','CS','KHMT'),
('11110013','Tran Thi Kim Ngan','2005','K18','NC','MMTTT'),
('11110014','Nguyen Ngoc Y','2005','K18','IS','HTTT'),
('11110015','Tran Thanh Hai','2004','K17','CS','TTNT'),
('11110016','Vo Van Loc','2004','K17','CE','TKVM'),
('11110017','Le Duy Manh','2004','K17','NC','ATTT'),
('11110018','Trinh Van Quoc','2003','K16','SE','KTPM'),
('11110019','Le Giang','2005','K18','ISE','CNTT'),
('11110020','Ho Thi Xuan','2005','K18','IS','TMDT');