CREATE DATABASE msgboard;
USE msgboard;
CREATE TABLE guestbook(
	id int(6) NOT NULL AUTO_INCREMENT,--标记每一条留言数据
	username VARCHAR(20),
	title VARCHAR(50), 
	content TEXT,
	addtime DATETIME,
	mesid int(6),
	PRIMARY KEY(id)
);