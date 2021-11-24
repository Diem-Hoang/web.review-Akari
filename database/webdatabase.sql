create database AkariDatabase
go
use AkariDatabase
go
create table NGUOIDUNG
(
MaUser int primary key not null IDENTITY(1,1),
HoTen	nvarchar(70),
Mail nvarchar(70) not null,
Gioitinh varchar(4),
NgaySinh datetime,
AnhDaiDien nvarchar(250),
SoDT int,
Matkhau nvarchar(30) not null
)

create table CTV
(
MaCTV int primary key not null IDENTITY(1,1),
HoTen	nvarchar(70),
Mail nvarchar(70) not null,
Gioitinh varchar(4),
NgaySinh datetime,
AnhDaiDien nvarchar(250),
SoDT int,
Matkhau nvarchar(30) not null
)
create table DanhMucBaiViet
(
ID int primary key not null IDENTITY(1,1),
TenDanhMuc nvarchar(250),
ParentID int,
)
create table BaiViet
(
ID int primary key not null IDENTITY(1,1),
IdDanhMuc int not null,
TenBaiVIet nvarchar(100),
NoiDung ntext not null,
NgayDangBai datetime,
LuotThich int,
LuotXem int,
Images nvarchar(250),
DiaDiem nvarchar(250),
GiaCa money,
LoaiHinh nvarchar(20),
YeuThich int
)
create table BinhLuan
(
ID int primary key not null ,
UserID int,
IDBaiviet int,
NoiDung nvarchar(300) not null,
NgayDang datetime,
LuotThich int,
)