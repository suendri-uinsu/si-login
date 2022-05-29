# Login Multi Level Menggunakan PHP OOP - 2022

# Database

```
CREATE TABLE tb_user (
	user_id INT(11) NOT NULL AUTO_INCREMENT,
	user_name VARCHAR(100) NOT NULL,
	user_password VARCHAR(256) NOT NULL,
	PRIMARY KEY(user_id),
	UNIQUE KEY(user_name)
);

CREATE TABLE tb_group (
	group_id INT(11) NOT NULL AUTO_INCREMENT,
	group_nama VARCHAR(100) NOT NULL,
	PRIMARY KEY(group_id),
	UNIQUE KEY(group_nama)
);

CREATE TABLE tb_role (
	role_id INT(11) NOT NULL AUTO_INCREMENT,
	role_id_user INT(11) NOT NULL,
	role_id_group INT(11) NOT NULL,
	PRIMARY KEY(role_id),
	FOREIGN KEY(role_id_user) REFERENCES tb_user(user_id) ON UPDATE CASCADE ON DELETE RESTRICT,
	FOREIGN KEY(role_id_group) REFERENCES tb_group(group_id) ON UPDATE CASCADE ON DELETE RESTRICT
);
```