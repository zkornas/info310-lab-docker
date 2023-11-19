CREATE TABLE gradebook (
    id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(255) NOT NULL,
    last_name VARCHAR(255) NOT NULL,
    student_id INT(7) NOT NULL,
    grade DECIMAL(3, 1) NOT NULL
);

INSERT INTO gradebook (first_name, last_name, student_id, grade) VALUES
('John', 'Doe', 1234567, 3.5),
('Jane', 'Smith', 2345678, 2.8),
('Alice', 'Johnson', 3456789, 3.2),
('Bob', 'Williams', 4567890, 3.9),
('Charlie', 'Davis', 5678901, 2.5),
('David', 'Miller', 6789012, 3.7),
('Eva', 'Jones', 7890123, 3.1),
('Frank', 'Taylor', 8901234, 2.9),
('Grace', 'Moore', 9012345, 3.8),
('Henry', 'Clark', 1230123, 3.0);