CREATE TABLE users(
	user_id int AUTO_INCREMENT primary key not null,
	user_fullname varchar(256) ,
	user_email varchar(256) not null,
	user_uname varchar(200) not null,
	user_pwd varchar(256) not null,
    created_at datetime default CURRENT_TIMESTAMP,
	last_seen datetime default current_timestamp
);

create table messages(
	    mid int auto_increment primary key not null,
        sender_id int not null,
        receiver_id int not null,
        message text not null,
		on_date datetime default current_timestamp,
        FOREIGN KEY (sender_id) REFERENCES users(user_id),
		FOREIGN KEY (receiver_id) REFERENCES users(user_id),
		created_at datetime DEFAULT CURRENT_TIMESTAMP
);
