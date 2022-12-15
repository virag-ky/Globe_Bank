CREATE TABLE subjects(id INT(11) NOT NULL AUTO_INCREMENT, menu_name VARCHAR(255), position INT(3), visible TINYINT(1), PRIMARY KEY(ID));

CREATE TABLE pages(id INT(11) NOT NULL AUTO_INCREMENT, subject_id INT(11), menu_name VARCHAR(255), position INT(3), visible TINYINT(1), content TEXT, PRIMARY KEY (id));

ALTER TABLE pages ADD INDEX fk(subject_id);
