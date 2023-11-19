CREATE TABLE gradebook (
    first_name VARCHAR(255) NOT NULL,
    last_name VARCHAR(255) NOT NULL,
    student_id INT(7) NOT NULL,
    grade DECIMAL(3, 1) NOT NULL
);

CREATE TABLE announcements (
    instructor VARCHAR(255) NOT NULL,
    message_text VARCHAR(255) NOT NULL
);

CREATE TABLE login_info (
    username VARCHAR(255) NOT NULL,
    pass VARCHAR(255) NOT NULL
);

INSERT INTO gradebook (first_name, last_name, student_id, grade) VALUES
('John', 'Doe', 1234567, 3.5),
('Jane', 'Smith', 2345678, 2.8),
('Alice', 'Johnson', 3456789, 0.6),
('Bob', 'Williams', 4567890, 3.9),
('Charlie', 'Davis', 5678901, 2.5),
('David', 'Miller', 6789012, 3.7),
('Eva', 'Jones', 7890123, 3.1),
('Frank', 'Taylor', 8901234, 2.9),
('Grace', 'Moore', 9012345, 3.8),
('Henry', 'Clark', 1230123, 3.0);

INSERT INTO announcements (instructor, message_text) VALUES
('Reifers', 'This is a test announcement'),
('Reifers', 'This is another test');

INSERT INTO login_info (username, pass) VALUES
('areifers@uw.edu', 'myPassword4!'),
('zkornas@uw.edu', 'secretPa55');