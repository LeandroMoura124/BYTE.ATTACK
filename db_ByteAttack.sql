create database ByteAttack;
use ByteAttack;



create table tbl_usuario(
	cd_usuario int primary key auto_increment,
    nm_usuario varchar(80) not null,
    ds_email varchar(80) not null,
    ds_senha varchar(20) not null,
    ds_status boolean not null,
    ds_endereco varchar(80) not null,
    ds_cidade varchar(30) not null, 
    ds_cep char(9) not null



) DEFAULT CHARSET = utf8;

insert into tbl_usuario
			values(Default, 'Léo', 'leofcb334@gmail.com', 'leo123', 0, 'Rua Caviúna, 05', 'São Paulo', '05267-320');
			-- (Default, 'Janailson Matias', 'matias@gmail.com', 'Matias123', 0, 'Rua Jaraguá, 128', 'São Paulo', '08881-040'),
			-- (Default, 'Olídio Junior', 'olídio@hotmail.com', 'etec20', 0, 'Rua Pompeia, 400', 'São Paulo', '06585-140')
            
select * from tbl_usuario;


create table tbemail(
cd_usuario int primary key auto_increment,
ds_email varchar(80) not null



) DEFAULT CHARSET = utf8;

select * from tbemail;
truncate tbemail;


drop table tbtext;

create User 'LeoByteAttack'@'localhost' IDENTIFIED WITH mysql_native_password BY 'ByteAttack123';
grant all privileges on ByteAttack.* TO 'LeoByteAttack'@'localhost' with grant option;